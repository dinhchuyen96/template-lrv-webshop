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
    {{-- <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script> --}}
    <!--Fevicon-->
    <link rel="icon" href="{{ url('home') }}/assets/img/icon/favicon.ico" type="image/x-icon" />
    <!-- Bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
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
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Modernizer JS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ url('home') }}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!-- header area start -->
    <header class="header-pos">
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-7 col-12">
                        <div class="header-top-left">
                            <ul>
                                <li><span>Email: </span></li> </span>{{ $hotline->email_1 }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-5 col-12">
                        <div class="box box-right">
                            <ul>
                                <li class="settings">
                                    @if (auth()->guard('account')->check())
                                        <img class="rounded-circle" src="@if ($acc->avatar == null) @if ($acc->sex == 'anh')
                                                            {{ url('uploads') }}/avatars/man.jpg
                                                        @else
                                                            {{ url('uploads') }}/avatars/woman.jpg @endif
                                                        @else
                                                        {{ url('uploads') }}/avatars/{{ $acc->avatar }}
                                                       @endif
                                        " style="width: 50px"
                                        alt="">
                                        <a class="ha-toggle" style="color:#fedc19"
                                            href="#">{{ __('main.hello') }}
                                            {{ $acc->last_name }}<span class="lnr lnr-chevron-down"></span></a>
                                    @else
                                        <a class="ha-toggle" href="#"><i class="fa fa-user"
                                                style="font-size:25px" aria-hidden="true"></i><span
                                                class="lnr lnr-chevron-down"></span></a>
                                    @endif
                                    <ul class="box-dropdown ha-dropdown">
                                        @if (auth()->guard('account')->check())
                                            <li><a href="{{ route('my_account') }}" title="Quản lý tài khoản">{{__('main.my_account')}}</a></li>
                                            <li><a href="{{ route('home.logout') }}"  title="Đăng xuất" >{{__('main.logout')}}</a></li>
                                </li>
                            @else
                                <li><a href="{{ route('home.login') }}"  title="Trang đăng nhập" >{{__('main.login')}}</a></li>
                                <li><a href="{{ route('home.register') }}"  title="Trang đăng ký" >{{__('main.register')}}</a></li>
                                @endif
                            </ul>
                            </li>
                            @if ($locale == 'vi')<a href="/locale/en"
                                    title="Đổi sang Tiếng Việt"><img src="{{ url('home') }}/assets/img/icon/en.png"
                                        alt=""></a>
                            @else
                                <a href="/locale/vi" title="Changer to English"><img
                                        src="{{ url('home') }}/assets/img/icon/vi2.png" alt=""></a>
                            @endif

                            </li>
                            <li class="currency">
                                <a class="ha-toggle" href="#">{{ __('main.currency') }}<span
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
                            <form method="get">
                                <div class="top-cat hm1">
                                    <div class="search-form">
                                        <select class="form-control" name="search" id="select1">
                                            <option value="">{{ __('main.select') }}</option>
                                            @foreach ($cats as $cat)
                                                <option value="{{ $cat->name }}">{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <input type="text" type="search" name="search" class="top-cat-field"
                                    placeholder="{{ __('main.searchph') }}" id="inputsearch" required>
                                <input type="submit" class="top-search-btn" title="Tìm kiếm sản phẩm"  value="{{ __('main.search') }}">
                            </form>
                            <div id="live_search" class="box_livesearch" style="">
                                <li class="viewed">Sản phẩm gợi ý</li>
                               
                            </div>
                            @if (isset($search_value))
                                <!-- Modal Search-->
                                @include('client.layouts.modal_search')                               
                            @endif
                        </div>
                    </div>
                    @if (auth()->guard('account')->check())
                        <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                            <div class="mini-cart-option">
                                <ul>
                                    <li class="compare">
                                        <a class="ha-toggle" href="/compare"  title="So sánh sản phẩm" ><span class="lnr lnr-sync"><span
                                                    class="count ml-1-compare">{{ $totalCompare }}</span></span>{{ __('main.compare') }}</a>
                                    </li>
                                    <li class="wishlist">
                                        <a class="ha-toggle" href="{{ route('home.wishlist') }}"  title="Danh sách sản phẩm yêu thích" ><span
                                                class="lnr lnr-heart"></span><span
                                                class="count">{{ $totalWishlist }}</span>{{ __('main.wishlist') }}</a>
                                    </li>
                                    <li class="my-cart">
                                        <a class="ha-toggle"  title="Kiểm tra giỏ hàng" ><span class="lnr lnr-cart"></span><span
                                                class="count">{{ $totalQuantity }}</span>{{ __('main.cart') }}</a>
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
                                                                    href="{{ route('home.product', ['product' => $carts->id, 'category' => $carts->category_id, 'slug' => Str::slug($carts->name)]) }}">{{ $carts->name }}</a>
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
                                                    <div class="subtotal-text">{{__('main.subtt')}} </div>
                                                    <div class="subtotal-price">{{ $subPrice }}$</div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-text">{{__('main.ecotax')}}</div>
                                                    <div class="subtotal-price">{{ $tax }}$</div>
                                                </li>
                                                <li>
                                                    <div class="subtotal-text">Vat (10%): </div>
                                                    <div class="subtotal-price">{{ number_format($vat) }}$</div>
                                                </li>
                                                @if ($coupon)
                                                    <li>
                                                        <div class="subtotal-text">Coupon</div>
                                                        @if ($coupon->discount_ab)
                                                            <div class="subtotal-price">-{{ $coupon->discount_ab }}$
                                                            </div>
                                                        @else
                                                            <div class="subtotal-price">-{{ $coupon->discount_rl }}%
                                                            </div>
                                                        @endif
                                                    </li>
                                                @endif
                                                <li>
                                                    <div class="subtotal-text">{{__('main.total')}}</div>
                                                    <div class="subtotal-price">
                                                        <span>{{ number_format($totalPrice) }}$</span>
                                                    </div>
                                                </li>
                                                <li class="mt-30">
                                                    <a class="cart-button" href="/cart">{{__('main.viewcart')}}</a>
                                                </li>
                                                <li>
                                                    <a class="cart-button"
                                                        href="{{ route('home.order_checkout') }}">{{__('main.checkout')}}</a>
                                                </li>
                                            </ul>
                                        @else
                                            <ul class="mini-cart-drop-down ha-dropdown">
                                                <h3>{{__('main.cartempty')}}</h3>
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
                                        <span>{{ __('main.categories') }}</span>
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
                                    <ul hidden class="category-item-parent"><a class="more-btn" href="#">More
                                            Categories</a></ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="{{ route('home') }}">{{ __('main.home') }}</a>
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
                                                                                <span
                                                                                    class="lnr lnr-chevron-right"></span>
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
                                        <li><a href="{{ route('blog') }}">BLOG<span
                                                    class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                @foreach ($blog_cats as $blog_cat)
                                                    <li><a
                                                            href="{{ route('blog_cat_id', ['blog_cat_id' => $blog_cat->id, 'slug' => Str::slug($blog_cat->name)]) }}">{{ $blog_cat->name }}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </li>
                                        <li><a href="/contactus">{{ __('main.contact') }}</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- </div> end main menu -->
                            <div class="header-call-action">
                                <p><span class="lnr lnr-phone"></span>Hotline :
                                    <strong>{{ $hotline->phone_1 }}</strong>
                                </p>
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
                                    <h3>{{ __('footer.signup') }}</h3>
                                    <p>{{ __('footer.befisrt') }}</p>
                                </div>
                                <div class="newsletter-box">
                                    <form id="mc-form">
                                        <input type="email" id="mc-email" autocomplete="off" class="email-box"
                                            placeholder="{{ __('footer.enterpl') }}">
                                        <button class="newsletter-btn" type="submit"
                                            id="mc-submit">{{ __('footer.sub') }}
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
                                    <h4>{{ __('footer.pay') }}</h4>
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
                                        <li><a href="about.html">{{ __('footer.abu') }}</a></li>
                                        <li><a href="#">{{ __('footer.di') }}</a></li>
                                        <li><a href="#">{{ __('footer.pp') }}</a></li>
                                        <li><a href="#">{{ __('footer.tc') }}</a></li>
                                        <li><a href="/contactus">{{ __('footer.cu') }}</a></li>
                                        <li><a href="#">{{ __('footer.rt') }}</a></li>
                                        <li><a href="#">{{ __('footer.sm') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> <!-- single widget end -->
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-single-widget">
                            <div class="widget-title">
                                <h4>{{ __('footer.cu') }}</h4>
                            </div>
                            <div class="widget-body">
                                <div class="footer-useful-link">
                                    <ul>
                                        <li><span>{{ __('footer.adr') }}</span>
                                            {{ $hotline->address_1 }}<br>{{ $hotline->address_2 }}</li>
                                        <li><span>email:</span>{{ $hotline->email_1 }}</li>
                                        <li><span>{{ __('footer.cus') }}</span>
                                            <strong>{{ $hotline->phone_1 }}</strong>
                                        </li>
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
                                <p>&copy; 20/5/2022 <b>Đình Chuyên</b> Made with <i
                                        class="fa fa-heart text-danger"></i> by <a
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
    <!-- all js include here -->
    <script src="{{ url('home') }}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ url('home') }}/assets/js/popper.min.js"></script>
    <script src="{{ url('home') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('home') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ url('home') }}/assets/js/plugins.js"></script>
    <script src="{{ url('home') }}/assets/js/ajax-mail.js"></script>
    <script src="{{ url('home') }}/assets/js/main.js"></script>
    <script src="{{ url('home') }}/assets/js/addcart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if (Session::has('ok'))
        <script type="text/javascript">
            toastr.success("{!! session::get('ok') !!}");
        </script>
    @endif
    @if (Session::has('no'))
        <script type="text/javascript">
            toastr.warning("{!! session::get('no') !!}");
        </script>
    @endif
</body>

<!-- Mirrored from template.hasthemes.com/sinrato/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 12:52:23 GMT -->

</html>
