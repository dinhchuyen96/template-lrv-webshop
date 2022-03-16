
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
	<!--Fevicon-->
	<link rel="icon" href="{{url('home')}}/assets/img/icon/favicon.ico" type="image/x-icon" />
	<!-- Bootstrap css -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/bootstrap.min.css">
    <!-- linear-icon -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{url('home')}}/assets/css/linear-icon.css">
    <!-- all css plugins css -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/plugins.css">
    <!-- default style -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/default.css">
    <!-- Main Style css -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/style.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{url('home')}}/assets/css/responsive.css">

    <!-- Modernizer JS -->
    <script src="{{url('home')}}/assets/js/vendor/modernizr-3.5.0.min.js"></script>
</head>
<body>
	<!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- header area start -->
    <header class="header-pos">
        <div class="header-top black-bg">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <div class="header-top-left">
                            <ul>
                                <li><span>Email: </span>support@sinrato.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="box box-right">
                            <ul>
                                <li class="settings">
                                    <a class="ha-toggle" href="#">My Account<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="/register">Register</a></li>
                                        <li><a href="/login">Login</a></li>
                                    </ul>
                                </li>
                                <li class="settings">
                                    <a class="ha-toggle" href="#">Language<span class="lnr lnr-chevron-down"></span></a>
                                    <ul class="box-dropdown ha-dropdown">
                                        <li><a href="login.html"><img src="{{url('home')}}/assets/img/icon/en.png" alt=""> English</a></li>
                                        <li><a href="login.html"><img src="{{url('home')}}/assets/img/icon/ge.png" alt=""> Germany</a></li>
                                    </ul>
                                </li>
                                <li class="currency">
                                    <a class="ha-toggle" href="#">Currency<span class="lnr lnr-chevron-down"></span></a>
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
                            <a href="index.html"><img src="{{url('home')}}/assets/img/logo/logo-sinrato.png" alt="brand-logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-12 order-sm-last">
                        <div class="header-middle-inner">
                            <form action="https://template.hasthemes.com/sinrato/sinrato/method">
                                <div class="top-cat hm1">
                                    <div class="search-form">
                                         <select>
                                            <optgroup label="Electronics">
                                                <option value="volvo">Laptop</option>
                                                <option value="saab">watch</option>
                                                <option value="saab">air cooler</option>
                                                <option value="saab">audio</option>
                                                <option value="saab">speakers</option>
                                                <option value="saab">amplifires</option>
                                            </optgroup>
                                            <optgroup label="Fashion">
                                                <option value="mercedes">Womens tops</option>
                                                <option value="audi">Jeans</option>
                                                <option value="audi">Shirt</option>
                                                <option value="audi">Pant</option>
                                                <option value="audi">Watch</option>
                                                <option value="audi">Handbag</option>
                                            </optgroup>
                                        </select> 
                                    </div>
                                </div>
                                <input type="text" class="top-cat-field" placeholder="Search entire store here">
                                <input type="button" class="top-search-btn" value="Search">
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-8 col-12 col-sm-8 order-lg-last">
                        <div class="mini-cart-option">
                            <ul>
                                <li class="compare">
                                    <a class="ha-toggle" href="/compare"><span class="lnr lnr-sync"></span>Product compare</a>
                                </li>
                                <li class="wishlist">
                                    <a class="ha-toggle" href="/wishlist"><span class="lnr lnr-heart"></span><span class="count">1</span>wishlist</a>
                                </li>
                                <li class="my-cart">
                                    <a class="ha-toggle" href="#"><span class="lnr lnr-cart"></span><span class="count">2</span>my cart</a>
                                    <ul class="mini-cart-drop-down ha-dropdown">
                                        <li class="mb-30">
                                            <div class="cart-img">
                                                <a href="product-details.html"><img alt="" src="{{url('home')}}/assets/img/cart/cart-1.jpg"></a>
                                            </div>
                                            <div class="cart-info">
                                                <h4><a href="product-details.html">Koss Porta Pro On Ear  Headphones </a></h4>
                                                <span> <span>1 x </span>£165.00</span>
                                            </div>
                                            <div class="del-icon">
                                                <i class="fa fa-times-circle"></i>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Sub-total: </div>
                                            <div class="subtotal-price">£48.94</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Eco Tax (-2.00): </div>
                                            <div class="subtotal-price">£1.51</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Vat (20%): </div>
                                            <div class="subtotal-price">£9.79</div>
                                        </li>
                                        <li>
                                            <div class="subtotal-text">Total: </div>
                                            <div class="subtotal-price"><span>£60.24</span></div>
                                        </li>
                                        <li class="mt-30">
                                            <a class="cart-button" href="/cart">view cart</a>
                                        </li>
                                        <li>
                                            <a class="cart-button" href="/checkout">checkout</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
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
                                    <ul id="menu2">
                                        <li><a href="shop-grid-left-sidebar.html">Audio & Home Theater <span class="lnr lnr-chevron-right"></span></a>
                                            <ul class="cat-submenu">
                                                <li><a href="shop-grid-left-sidebar.html">Home Audio <span class="lnr lnr-chevron-right"></span></a>
                                                    <ul class="cat-submenu">
                                                        <li><a href="shop-grid-left-sidebar.html">CD Players & Turntables</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Home Theater Systems</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Receivers & Amplifiers</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Speakers</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Wireless  Audio</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid-left-sidebar.html">Blu-ray Disc Players</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">Curved TVs<span class="lnr lnr-chevron-right"></span></a>
                                                    <ul class="cat-submenu">
                                                        <li><a href="shop-grid-left-sidebar.html">CD Players & Turntables</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Home Theater Systems</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Receivers & Amplifiers</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Speakers</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Wireless  Audio</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="shop-grid-left-sidebar.html">Streaming Media Players</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">OLED TVs</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">LED & LCD TVs</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid-left-sidebar.html">Video & Home Theater<span class="lnr lnr-chevron-right"></span></a>
                                            <ul class="cat-submenu category-mega">
                                                <li class="cat-mega-title"><a href="#">Security Cameras</a>
                                                    <ul>
                                                        <li><a href="shop-grid-left-sidebar.html">DSLR Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Lense Camera</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Digital Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Mirrorless Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Point</a></li>
                                                    </ul>
                                                </li>
                                                <li class="cat-mega-title"><a href="#">Mirrorless Cameras</a>
                                                    <ul>
                                                        <li><a href="shop-grid-left-sidebar.html">DSLR Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Lense Camera</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Digital Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Mirrorless Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Point</a></li>
                                                    </ul>
                                                </li>
                                                <li class="cat-mega-title"><a href="#">Digital Cameras</a>
                                                    <ul>
                                                        <li><a href="shop-grid-left-sidebar.html">DSLR Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Lense Camera</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Digital Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Mirrorless Cameras</a></li>
                                                        <li><a href="shop-grid-left-sidebar.html">Point</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid-left-sidebar.html">Cellphones & Accessories<span class="lnr lnr-chevron-right"></span></a>
                                            <ul class="cat-submenu">
                                                <li><a href="shop-grid-left-sidebar.html">CD Players & Turntables</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">Home Theater Systems</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">Receivers & Amplifiers</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">Speakers</a></li>
                                                <li><a href="shop-grid-left-sidebar.html">Wireless  Audio</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="shop-grid-left-sidebar.html">Top Item</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Video Games Consoles</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Business & Office</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Headphones & Accessories</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Quadcopters & Accessories</a></li>
                                        <li><a href="shop-grid-left-sidebar.html">Network Devices</a></li>
                                        <li class="category-item-parent hidden"><a href="shop-grid-left-sidebar.html">Smart Watches</a></li>
                                        <li class="category-item-parent"><a class="more-btn" href="#">More Categories</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li><a href="/">HOME<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                <li><a href="/">Home Version 1</a></li>
                                                <li><a href="index-2.html">Home Version 2</a></li>
                                                <li><a href="index-3.html">Home Version 3</a></li>
                                                <li><a href="index-4.html">Home Version 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">SHOP<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                <li><a href="#">Shop Grid Layout <span class="lnr lnr-chevron-right"></span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-grid-left-sidebar.html">Shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">Shop grid right sightbar</a></li>
                                                        <li><a href="shop-grid-left-sidebar-4-column.html">shop grid left sidebar 4 col</a></li>
                                                        <li><a href="shop-grid-right-sidebar-4-column.html">shop grid right sidebar 4 col</a></li>
                                                        <li><a href="shop-grid-full-width-3-column.html">shop grid full width 3 col</a></li>
                                                        <li><a href="shop-grid-full-width-4-column.html">shop grid full width 4 col</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Shop List Layout <span class="lnr lnr-chevron-right"></span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="shop-list-left-sidebar.html">Shop lidt left sidebar</a></li>
                                                        <li><a href="shop-list-right-sidebar.html">Shop list right sidebar</a></li>
                                                        <li><a href="shop-list-full-width.html">Shop list full width</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="#">Product Details <span class="lnr lnr-chevron-right"></span></a>
                                                    <ul class="dropdown">
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="product-details-variable.html">Product Details Variable</a></li>
                                                        <li><a href="product-details-external.html">Product Details External</a></li>
                                                        <li><a href="product-details-group.html">Product Details Group</a></li>
                                                        <li><a href="tab-style-one.html">tab style one</a></li>
                                                        <li><a href="product-details-gallery-left.html">product details gallery left</a></li>
                                                        <li><a href="product-details-gallery-right.html">product details gallery right</a></li>
                                                        <li><a href="sticky-left-sidebar.html">sticky left sidebar</a></li>
                                                        <li><a href="sticky-right-sidebar.html">sticky right sidebar</a></li>
                                                        <li><a href="product-details-slider-box.html">product details slider box</a></li>
                                                        <li><a href="product-details-slider-box.html">product details slider box</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="static"><a href="#">Pages<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="mega-menu mega-full">
                                                <li class="mega-title"><a href="#">Column one</a>
                                                    <ul>
                                                        <li><a href="shop-grid-left-sidebar.html">Shop grid left sidebar</a></li>
                                                        <li><a href="shop-grid-right-sidebar.html">Shop grid right sightbar</a></li>
                                                        <li><a href="shop-grid-full-width-4-column.html">Shop grid full width</a></li>
                                                        <li><a href="shop-list-full-width.html">Shop list full width</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">Column two</a>
                                                    <ul>
                                                        <li><a href="/checkout">Check Out</a></li>
                                                        <li><a href="/cart">Cart</a></li>
                                                        <li><a href="/wishlist">Wishlist</a></li>
                                                        <li><a href="/compare">Compare</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">Column Three</a>
                                                    <ul>
                                                        <li><a href="product-details.html">Product Details</a></li>
                                                        <li><a href="product-details-variable.html">Product Details Variable</a></li>
                                                        <li><a href="product-details-external.html">Product Details External</a></li>
                                                        <li><a href="product-details-group.html">Product Details Group</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-title"><a href="#">Column Four</a>
                                                    <ul>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                        <li><a href="/myaccount">my account</a></li>
                                                        <li><a href="/contactus">contact us</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a href="#">BLOG<span class="lnr lnr-chevron-down"></span></a>
                                            <ul class="dropdown">
                                                <li><a href="blog-left-sidebar-3.html">Blog Left Sidebar 3 col</a></li>
                                                <li><a href="blog-left-sidebar-4.html">Blog left Sidebar 4 col</a></li>
                                                <li><a href="blog-right-sidebar-3.html">Blog Right Sidebar 3 col</a></li>
                                                <li><a href="blog-right-sidebar-4.html">Blog Right Sidebar 4 col</a></li>
                                                <li><a href="blog-full-3-column.html">Blog full width 3 col</a></li>
                                                <li><a href="blog-full-4-column.html">Blog full width 4 col</a></li>
                                                <li><a href="blog-full-5-column.html">Blog full width 5 col</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                                <li><a href="blog-details-audio.html">Blog Details audio</a></li>
                                                <li><a href="blog-details-gallery.html">Blog Details gallery</a></li>
                                                <li><a href="blog-details-video.html">Blog Details video</a></li>
                                                <li><a href="blog-details-right-sidebar.html">Blog Details right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/contactus">CONTACT US</a></li>
                                    </ul>
                                </nav>
                            </div> <!-- </div> end main menu -->
                            <div class="header-call-action">
                                <p><span class="lnr lnr-phone"></span>Hotline : <strong>1-001-234-5678</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 d-block d-lg-none"><div class="mobile-menu"></div></div>
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
                                        <input type="email" id="mc-email" autocomplete="off" class="email-box" placeholder="enter your email">
                                        <button class="newsletter-btn" type="submit" id="mc-submit">subscribe !</button>
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
                                         <img src="{{url('home')}}/assets/img/logo/logo-sinrato.png" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="widget-body">
                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                <div class="payment-method">
                                    <h4>payment</h4>
                                    <img src="{{url('home')}}/assets/img/payment/payment.png" alt="">
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
                                        <li><span>Address:</span> 4710-4890 Breckinridge St,Fayetteville, NC 28311</li>
                                        <li><span>email:</span> support@sinrato.com</li>
                                        <li><span>Call us:</span> <strong>1-1001-234-5678</strong></li>
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
                                        Check out "Alice - Multipurpose Responsive #Magento #Theme" on #Envato by <a href="#">@sinratos</a> #Themeforest <a href="#">https://t.co/DNdhAwzm88</a>
                                        <span class="tweet-time"><i class="fa fa-twitter"></i><a href="#">30 sep</a></span>
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
                                <p>&copy; 2021 <b>Sinrato</b> Made with <i class="fa fa-heart text-danger"></i> by <a href="https://hasthemes.com/"><b>HasThemes</b></a></p>
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

    <!-- Quick view modal start -->
    <div class="modal fade" id="quickk_view">
        <div class="container">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="product-large-slider mb-20">
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-4.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-5.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-6.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-7.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-8.jpg" alt=""/>
                                    </div>
                                    <div class="pro-large-img">
                                        <img src="{{url('home')}}/assets/img/product/product-9.jpg" alt=""/>
                                    </div>
                                </div>
                                <div class="pro-nav">
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-4.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-5.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-6.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-7.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-8.jpg" alt="" /></div>
                                    <div class="pro-nav-thumb"><img src="{{url('home')}}/assets/img/product/product-9.jpg" alt="" /></div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="product-details-inner">
                                    <div class="product-details-contentt">
                                        <div class="pro-details-name mb-10">
                                            <h3>Bose SoundLink Bluetooth Speaker</h3>
                                        </div>
                                        <div class="pro-details-review mb-20">
                                            <ul>
                                                <li>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                    <span><i class="fa fa-star"></i></span>
                                                </li>
                                                <li><a href="#">1 Reviews</a></li>
                                            </ul>
                                        </div>
                                        <div class="price-box mb-15">
                                            <span class="regular-price"><span class="special-price">£50.00</span></span>
                                            <span class="old-price"><del>£60.00</del></span>
                                        </div>
                                        <div class="product-detail-sort-des pb-20">
                                            <p>Canon's press material for the EOS 5D states that it 'defines (a) new D-SLR category', while we're not typically too concerned</p>
                                        </div>
                                        <div class="pro-details-list pt-20">
                                            <ul>
                                                <li><span>Availability :</span>In Stock</li>
                                            </ul>
                                        </div>
                                        <div class="product-availabily-option mt-15 mb-15">
                                            <h3>Available Options</h3>
                                            <div class="color-optionn">
                                                <h4><sup>*</sup>color</h4>
                                                <ul>
                                                    <li>
                                                        <a class="c-black" href="#" title="Black"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-blue" href="#" title="Blue"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-brown" href="#" title="Brown"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-gray" href="#" title="Gray"></a>
                                                    </li>
                                                    <li>
                                                        <a class="c-red" href="#" title="Red"></a>
                                                    </li>
                                                </ul> 
                                            </div>
                                        </div>
                                        <div class="pro-quantity-box mb-30">
                                            <div class="qty-boxx">
                                                <label>qty :</label>
                                                <input type="text" placeholder="0">
                                                <button class="btn-cart lg-btn">add to cart</button>
                                            </div>
                                        </div>
                                        <div class="pro-social-sharing">
                                            <label>share :</label>
                                            <ul>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-facebook" title="Facebook">
                                                        <i class="fa fa-facebook"></i>
                                                        <span>like 0</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-twitter" title="Twitter">
                                                        <i class="fa fa-twitter"></i>
                                                        <span>tweet</span>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item">
                                                    <a href="#" class="bg-google" title="Google Plus">
                                                        <i class="fa fa-google-plus"></i>
                                                        <span>google +</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Quick view modal end -->

	<!-- all js include here -->
    <script src="{{url('home')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{url('home')}}/assets/js/popper.min.js"></script>
    <script src="{{url('home')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{url('home')}}/assets/js/plugins.js"></script>
    <script src="{{url('home')}}/assets/js/ajax-mail.js"></script>
    <script src="{{url('home')}}/assets/js/main.js"></script>
</body>

<!-- Mirrored from template.hasthemes.com/sinrato/sinrato/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 12:52:23 GMT -->
</html>