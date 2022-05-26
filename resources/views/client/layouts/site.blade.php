<!doctype html>
<html class="no-js" lang="en">

<!-- Mirrored from template.hasthemes.com/sinrato/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 12:51:39 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <!-- Page Title -->
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{ url('home') }}/assets/css/options.css">

    <!--Fevicon-->
    <link rel="icon" href="{{ url('home') }}/assets/img/icon/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap css -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/bootstrap.min.css">
    <!-- linear-icon -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/linear-icon.css">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/plugins.css">
    <!-- default style -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/default.css">
    <!-- Main Style css -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ url('home') }}/assets/css/responsive.css">

    <!-- Modernizer JS -->
    <script src="{{ url('home') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!-- header area start -->
    <header class="header-pos">
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="header-top-left">
                            <ul>
                                <li><span>Email: </span>{{$hotline->email_1}}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box box-right">
                            <ul>
                                <li class="settings">
                                    @if (auth()->guard('account')->check())
                                        <a class="ha-toggle" style="color:#fedc19" href="#">Hello
                                            {{ $acc->last_name }}<span class="lnr lnr-chevron-down"></span></a>
                                    @else
                                        <a class="ha-toggle" href="#"><i class="fa fa-user" style="font-size:25px" aria-hidden="true"></i><span
                                                class="lnr lnr-chevron-down"></span></a>
                                    @endif
                                    <ul class="box-dropdown ha-dropdown">
                                        @if (auth()->guard('account')->check())
                                            <li><a href="{{ route('my_account') }}">My-Account</a></li>
                                            <li><a href="{{ route('home.logout') }}">Logout</a></li>
                                            </li>
                                        @else
                                            <li><a href="{{ route('home.login') }}">Login</a></li>
                                            <li><a href="{{ route('home.register') }}">Register</a></li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a class="ha-toggle" href="#">Language<span
                                            class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html"><img src="{{ url('home') }}/assets/img/icon/en.png"
                                                    alt=""> English</a></li>
                                        <li><a href="login.html"><img src="{{ url('home') }}/assets/img/icon/ge.png"
                                                    alt=""> Germany</a></li>
                                    </ul>
                                </li>
                                <li class="currency">
                                    <a class="ha-toggle" href="#">Currency<span
                                            class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html">€ Euro</a></li>
                                        <li><a href="login.html">$ US Doller</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-4 col-sm-4 col-12">
                        <div class="logo">
                            <a href=""><img src="{{ url('home') }}/assets/img/logo/logo-sinrato.png"
                                    alt="brand-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 order-sm-last">
                        <div class="header-middle-inner">
                            <form method="get"  >
                                <div class="top-cat hm1">
                                    <div class="search-form">
                                        <select class="form-control" name="search" id="">
                                            <option value="">Select</option>
                                            @foreach ($cats as $cat)
                                                <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="text" type="search" name="search" class="top-cat-field"
                                    placeholder="Search entire store here" required>
                                <input type="submit" class="top-search-btn" value="Search">
                            </form>
                            @if ($search_value)
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" style="max-width: 850px" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="exampleModalLongTitle">Related Product
                                                </h2>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body row d-flex justify-content-center">
                                                @foreach ($products_search as $key => $value)
                                                    <div class="product-item mb-30">
                                                        <div class="product-thumb">
                                                            <a
                                                                href="{{ route('home.product', ['product' => $value->id,'category' => $value->category_id,'slug' => Str::slug($value->name)]) }}">
                                                                <img src="{{ url('uploads') }}/products/{{ $value->image }}"
                                                                    width="250px" class="pri-img" alt="">
                                                                <img src="{{ url('uploads') }}/products/{{ $value->image }}"
                                                                    width="250px" class="sec-img" alt="">
                                                            </a>
                                                            <div class="box-label">
                                                                <div class="label-product label_new">
                                                                    <span>new</span>
                                                                </div>
                                                                <div class="label-product label_sale">
                                                                    @if ($value->percent_sale > 0)
                                                                        <span>sale {{ $value->percent_sale }}%</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="product-caption">
                                                            <div class="manufacture-product">
                                                                <p><a
                                                                        href="{{ route('home.category', $value->category_id) }}">{{ $value->cat->name }}</a>
                                                                </p>
                                                            </div>
                                                            <div class="product-name">
                                                                <h4><a
                                                                        href="{{ route('home.product', ['product' => $value->id,'category' => $value->category_id,'slug' => Str::slug($value->name)]) }}">{{ $value->name }}</a>
                                                                </h4>
                                                            </div>
                                                            <div class="ratings">
                                                                @if ($value->review_rt->avg('rating') == 0)
                                                                    <span class="yellow"><i
                                                                            class="lnr lnr-star"></i></span>
                                                                    <span class="yellow"><i
                                                                            class="lnr lnr-star"></i></span>
                                                                    <span class="yellow"><i
                                                                            class="lnr lnr-star"></i></span>
                                                                    <span class="yellow"><i
                                                                            class="lnr lnr-star"></i></span>
                                                                    <span class="yellow"><i
                                                                            class="lnr lnr-star"></i></span>
                                                                @else
                                                                    @for ($i = 0; $i < $value->review_rt->avg('rating'); $i++)
                                                                        <span class="yellow"><i
                                                                                class="lnr lnr-star"></i></span>
                                                                    @endfor
                                                                @endif
                                                            </div>
                                                            <div class="price-box">
                                                                @if ($value->sale_price < $value->price && $value->sale_price != 0)
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ number_format($value->sale_price, 0) }}$</span></span>
                                                                    <span
                                                                        class="old-price"><del>{{ $value->price }}$</del></span>
                                                                @else
                                                                    <span class="regular-price"><span
                                                                            class="special-price">{{ $value->price }}$</span></span>
                                                                @endif
                                                            </div>
                                                            <a href="{{ route('home.cart-add', $value->id) }}"
                                                                class="btn-cart btn " type="button">add to cart</a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                    @if (auth()->guard('account')->check())
                        <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                            <div class="mini-cart-option">
                                <ul>
                                    <li class="compare">
                                        <a class="ha-toggle" href="/compare"><span class="lnr lnr-sync"><span
                                                    class="count ml-1-compare">{{ $totalCompare }}</span></span>Product
                                            compare</a>
                                    </li>
                                    <li class="wishlist">
                                        <a class="ha-toggle" href="{{ route('home.wishlist') }}"><span
                                                class="lnr lnr-heart"></span><span
                                                class="count">{{ $totalWishlist }}</span>wishlist</a>
                                    </li>
                                    <li class="my-cart">
                                        <a class="ha-toggle"><span class="lnr lnr-cart"></span><span
                                                class="count">{{ $totalQuantity }}</span>My cart</a>
                                        @if ($carts)
                                            <ul class="mini-cart-drop-down ha-dropdown">
                                                @foreach ($carts as $carts)
                                                    <li class="mb-30">
                                                        <div class="cart-img">
                                                            <a href=""><img alt=""
                                                                    src="{{ url('uploads') }}/products/{{ $carts->image }}"></a>
                                                        </div>
                                                        <div class="cart-info">
                                                            <h4><a
                                                                    href="{{ route('home.product', ['product' => $carts->id,'category' => $carts->category_id,'slug' => Str::slug($carts->name)]) }}">{{ $carts->name }}</a>
                                                            </h4>
                                                            <span> <span>{{ $carts->quantity }}</span>x
                                                            </span>${{ $carts->price }}</span>
                                                        </div>
                                                        <div class="del-icon">
                                                            <a href="{{ route('home.cart-remove', $carts->id) }}"><i
                                                                    class="fa fa-times-circle"></i></a>
                                                        </div>
                                                    </li>
                                                @endforeach
                                                <li>
                                                    <div class="subtotal-text">Sub-total: </div>
                                                    <div class="subtotal-price">{{ $subPrice }}$</div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-text">Eco Tax (-2.00): </div>
                                                    <div class="subtotal-price">{{ $tax }}$</div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-text">Vat (10%): </div>
                                                    <div class="subtotal-price">{{number_format($vat)}}$</div>
                                                </li>
                                                @if ($coupon)
                                                <li>
                                                        <div class="subtotal-text">Coupon</div>
                                                    @if($coupon->discount_ab)
                                                        <div class="subtotal-price">-{{$coupon->discount_ab}}$</div>
                                                    @else
                                                        <div class="subtotal-price">-{{$coupon->discount_rl}}%</div>
                                                    @endif
                                                </li>
                                                @endif
                                                <li>
                                                    <div class="subtotal-text">Total: </div>
                                                    <div class="subtotal-price"><span>{{number_format($totalPrice)}}$</span></div>
                                                </li>
                                                <li class="mt-30">
                                                    <a class="cart-button" href="/cart">view cart</a>
                                                </li>
                                                <li>
                                                    <a class="cart-button"
                                                        href="{{ route('home.order_checkout') }}">checkout</a>
                                                </li>
                                            </ul>
                                        @else
                                        <ul class="mini-cart-drop-down ha-dropdown">
                                            <h3>Cart is empty</h3>
                                        </ul>
                                        @endif
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="header-top-menu theme-bg sticker">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="top-main-menu">
                            <div class="categories-menu-bar">
                                <div class="categories-menu-btn ha-toggle">
                                    <div class="left">
                                        <i class="lnr lnr-text-align-left"></i>
                                        <span>Browse categories</span>
                                    </div>
                                    <div class="right">
                                        <i class="lnr lnr-chevron-down"></i>
                                    </div>
                                </div>
                                <nav class="categorie-menus ha-dropdown">
                                    @foreach ($cats as $cat)
                                        <ul id="menu2">
                                            <li><a href="{{ route('home.category', $cat->id) }}">{{ $cat->name }}
                                                    @if ($cat->children->isNotEmpty())
                                                        <span class="lnr lnr-chevron-right"></span>
                                                    @endif
                                                </a>
                                                <ul class="cat-submenu">
                                                    @foreach ($cat->children as $ccat)
                                                        <li><a href="{{ route('home.category', $ccat->id) }}">{{ $ccat->name }}
                                                            @if ($ccat->children->isNotEmpty())
                                                                <span class="lnr lnr-chevron-right"></span>
                                                                <ul class="cat-submenu"></ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    @endforeach
                                <ul hidden class="category-item-parent"><a class="more-btn" href="#">More Categories</a></ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">HOME</a>
                                        </li>
                                        <li>
                                            <a href="#">SHOP<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                @foreach ($cats as $cat)
                                                    <li>
                                                        <a href="{{ route('home.category', $cat->id) }}">{{ $cat->name }}
                                                            @if ($cat->children->isNotEmpty())
                                                                <span class="lnr lnr-chevron-right"></span>
                                                            @endif
                                                        </a>
                                                        @if ($cat->children->isNotEmpty())
                                                            <ul class="dropdown">
                                                                @foreach ($cat->children as $ccat)
                                                                    <li><a
                                                                            href="{{ route('home.category', $ccat->id) }}">{{ $ccat->name }}
                                                                            @if ($ccat->children->isNotEmpty())
                                                                                <span class="lnr lnr-chevron-right"></span>
                                                                                <ul class="dropdown">
                                                                                    @foreach ($ccat->children as $cccat)
                                                                                        <li><a
                                                                                                href="{{ route('home.category', $cccat->id) }}">{{ $cccat->name }}</a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li class="static"><a href="#">Pages<span
                                                    class="lnr lnr-chevron-down"></span></a>

                                        </li>
                                        <li><a href="{{route('blog')}}">BLOG<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                @foreach ($blog_cats as $blog_cat)
                                                    <li><a href="{{ route('blog_cat_id',['blog_cat_id' => $blog_cat->id, 'slug' => Str::slug($blog_cat->name)]) }}">{{$blog_cat->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/contactus">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- </div> end main menu -->
                            <div class="header-call-action">
                                <p><span class="lnr lnr-phone"></span>Hotline : <strong>{{$hotline->phone_1}}</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->

    <!-- slider area start -->
    @yield('main')
    <!-- brand sale area end -->

    <!-- scroll to top -->
    <div class="scroll-top not-visible">
        <i class="fa fa-angle-up"></i>
    </div> <!-- /End Scroll to Top -->

    <!-- footer area start -->
    <footer>
        <!-- news-letter area start -->
        <div class="newsletter-group">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="newsletter-box">
                            <div class="newsletter-inner">
                                <div class="newsletter-title">
                                    <h3>Sign Up For Newsletters</h3>
                                    <p>Be the First to Know. Sign up for newsletter today</p>
                                </div>
                                <div class="newsletter-box">
                                    <form id="mc-form">
                                        <input type="email" id="mc-email" autocomplete="off" class="email-box"
                                            placeholder="enter your email">
                                        <button class="newsletter-btn" type="submit" id="mc-submit">subscribe
                                            !</button>
                                    </form>
                                </div>
                            </div>
                            <div class="link-follow">
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                <a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a>
                                <a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/"><i class="fa fa-youtube"></i></a>
                            </div>
                        </div>
                        <!-- mailchimp-alerts Start -->
                        <div class="mailchimp-alerts">
                            <div class="mailchimp-submitting"></div><!-- mailchimp-submitting end -->
                            <div class="mailchimp-success"></div><!-- mailchimp-success end -->
                            <div class="mailchimp-error"></div><!-- mailchimp-error end -->
                        </div><!-- mailchimp-alerts end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- news-letter area end -->
        <!-- footer top area start -->
        <div class="footer-top pt-50 pb-50">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <div class="footer-logo mb-30">
                                    <a href="index.html">
                                        <img src="{{ url('home') }}/assets/img/logo/logo-sinrato.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <p>We are a team of designers and developers that create high quality Magento,
                                    Prestashop, Opencart.</p>
                                <div class="payment-method">
                                    <h4>payment</h4>
                                    <img src="{{ url('home') }}/assets/img/payment/payment.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Information</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><a href="about.html">about us</a></li>
                                        <li><a href="#">Delivery Information</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="/contactus">Contact Us</a></li>
                                        <li><a href="#">Returns</a></li>
                                        <li><a href="#">Site Map</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>contact us</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><span>Address:</span> {{$hotline->address_1}}<br>{{$hotline->address_2}}</li>
                                        <li><span>email:</span>{{$hotline->email_1}}</li>
                                        <li><span>Call us:</span> <strong>{{$hotline->phone_1}}</strong></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>Our Twitter Feed</h4>
                            </div>
                            <div class="widget-body">
                                <div class="twitter-article">
                                    <div class="twitter-text">
                                        Check out "Alice - Multipurpose Responsive #Magento #Theme" on #Envato by <a
                                            href="#">@sinratos</a> #Themeforest <a href="#">https://t.co/DNdhAwzm88</a>
                                        <span class="tweet-time"><i class="fa fa-twitter"></i><a href="#">30
                                                sep</a></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                </div>
            </div>
        </div>
        <!-- footer top area end -->
        <!-- footer bottom area start -->
        <div class="footer-bottom">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content">
                            <div class="footer-copyright">
                                <p>&copy; 20/5/2022 <b>Đình Chuyên</b> Made with <i class="fa fa-heart text-danger"></i> by <a
                                        href="https://hasthemes.com/"><b>HasThemes</b></a></p>
                            </div>
                            <div class="footer-custom-link">
                                <a href="#">Brands</a>
                                <a href="#">Specials</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- footer bottom area end -->
    </footer>
    <!-- footer area end -->
    @if (session()->has('ok'))
        <div class="modal fade" id="overlay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(255, 255, 255)">
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                        <h3 class="modal-title" style="color: green">{{session()->get('ok') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if (session()->has('no'))
        <div class="modal fade" id="overlay">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header" style="background-color: rgb(255, 255, 255)">
                        {{-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> --}}
                        <h3 class="modal-title" style="color: red">{{session()->get('no') }}</h3>
                    </div>
                </div>
            </div>
        </div>
    @endif

    <!-- all js include here -->
    <script src = "{{ url('home') }}/assets/js/vendor/jquery-1.12.4.min.js">
    <script src = "{{ url('home') }}/assets/js/popper.min.js"></script>
    <script src = "{{ url('home') }}/assets/js/bootstrap.min.js"></script>
    <script src = "{{ url('home') }}/assets/js/bootstrap.min.js"></script>
    <script src = "{{ url('home') }}/assets/js/plugins.js"></script>
    <script src = "{{ url('home') }}/assets/js/ajax-mail.js"></script>
    <script src = "{{ url('home') }}/assets/js/main.js"></script>
    <script src = "{{ url('home') }}/assets/js/addcart.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</body>

<!-- Mirrored from template.hasthemes.com/sinrato/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 12:52:23 GMT -->

</html>
