<!--=========================================================
    Item Name: Ekka - Ecommerce HTML Template.
    Author: ashishmaraviya
    Version: 3.3
    Copyright 2022-2023
	Author URI: https://themeforest.net/user/ashishmaraviya
 ============================================================-->
 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge" />
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

     <title>{{ucwords(env('WEB_THEME'))}}</title>
     <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-8.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-8.png" />
    <meta name="msapplication-TileImage" content="{{asset('public/frontend-assets') }}/images/favicon/favicon-8.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/nouislider.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/owl.carousel.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/owl.theme.default.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/demo8.css" />

</head>
<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top social Start -->
                    <div class="col text-left header-top-left d-none d-lg-block">
                        <div class="header-top-social">
                            <span class="social-text text-upper">Follow us on:</span>
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Category Toggle Start -->
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <img src="{{asset('public/frontend-assets') }}/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                    </a>
                    <!-- Header Top Category Toggle End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message text-upper">
                            <span>Free Shipping</span>This Week Order Over - $75
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-lan-curr d-flex justify-content-end">
                            <!-- Currency Start -->
                            <div class="header-top-curr dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul>
                            </div>
                            <!-- Currency End -->
                            <!-- Language Start -->
                            <div class="header-top-lan dropdown">
                                <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                        class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col d-lg-none ">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{asset('public/frontend-assets') }}/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="{{asset('public/frontend-assets') }}/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-8.png" alt="Site Logo" /><img
                                        class="dark-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-8.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                    <button class="submit" type="submit"><img src="{{asset('public/frontend-assets') }}/images/icons/search.svg"
                                            class="svg_img header_svg" alt="" /></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">

                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="{{asset('public/frontend-assets') }}/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count">4</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count ec-cart-count cart-count-lable">3</span>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-8.png" alt="Site Logo" /><img
                                    class="dark-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-8.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit"><img src="{{asset('public/frontend-assets') }}/images/icons/search.svg"
                                        class="svg_img header_svg" alt="icon" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="{{url('/')}}">Home</a></li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a>
                                                </li>
                                                <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a>
                                                </li>
                                                <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic
                                                        Variation</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Columns
                                                        Variation</a></li>
                                                <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                                <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">List Variation</a>
                                                </li>
                                                <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                                <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                                <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a>
                                                </li>
                                                <li><a href="shop-list-banner-right-sidebar.html">Banner right
                                                        sidebar</a></li>
                                                <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul class="ec-main-banner w-100">
                                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img
                                                            class="img-responsive" src="{{asset('public/frontend-assets') }}/images/menu-banner/1.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                            class="img-responsive" src="{{asset('public/frontend-assets') }}/images/menu-banner/2.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                            class="img-responsive" src="{{asset('public/frontend-assets') }}/images/menu-banner/3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                            class="img-responsive" src="{{asset('public/frontend-assets') }}/images/menu-banner/4.jpg"
                                                            alt=""></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Products</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product page
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                                <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product 360
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                                <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product video
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-video-left-sidebar.html">Video left sidebar</a>
                                                </li>
                                                <li><a href="product-video-right-sidebar.html">Video right sidebar</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Product
                                                gallery
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a>
                                                </li>
                                                <li><a href="product-gallery-right-sidebar.html">Gallery right
                                                        sidebar</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="product-full-width.html">Product full width</a></li>
                                        <li><a href="product-360-full-width.html">360 full width</a></li>
                                        <li><a href="product-video-full-width.html">Video full width</a></li>
                                        <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/about-us')}}">About Us</a></li>
                                        <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="compare.html">Compare</a></li>
                                        <li><a href="{{url('/faq')}}">FAQ</a></li>
                                        <li><a href="{{url('/customer/login')}}">Login</a></li>
                                        <li><a href="register.html">Register</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="terms-condition.html">Terms Condition</a></li>
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><span class="main-label-note-new" data-toggle="tooltip"
                                        title="NEW"></span><a href="javascript:void(0)">Others</a>
                                    <ul class="sub-menu">
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Confirmation
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                                <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                                <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                                <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                                <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail Reset
                                                password
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-forgot-password-1.html">Reset password 1</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-2.html">Reset password 2</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-3.html">Reset password 3</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-4.html">Reset password 4</a>
                                                </li>
                                                <li><a href="email-template-forgot-password-5.html">Reset password 5</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Mail
                                                Promotional
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="email-template-offers-1.html">Offer mail 1</a></li>
                                                <li><a href="email-template-offers-2.html">Offer mail 2</a></li>
                                                <li><a href="email-template-offers-3.html">Offer mail 3</a></li>
                                                <li><a href="email-template-offers-4.html">Offer mail 4</a></li>
                                                <li><a href="email-template-offers-5.html">Offer mail 5</a></li>
                                                <li><a href="email-template-offers-6.html">Offer mail 6</a></li>
                                                <li><a href="email-template-offers-7.html">Offer mail 7</a></li>
                                                <li><a href="email-template-offers-8.html">Offer mail 8</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-hot"></span>
                                            <a href="javascript:void(0)">Vendor account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                                <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                                <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                                <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-trending"></span>
                                            <a href="javascript:void(0)">User account pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="user-profile.html">User Profile</a></li>
                                                <li><a href="user-history.html">History</a></li>
                                                <li><a href="wishlist.html">Wishlist</a></li>
                                                <li><a href="track-order.html">Track Order</a></li>
                                                <li><a href="user-invoice.html">Invoice</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static"><a href="javascript:void(0)">Construction
                                                pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="404-error-page.html">404 error page</a></li>
                                                <li><a href="under-maintenance.html">maintanence page</a></li>
                                                <li><a href="coming-soon.html">Coming soon page</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown position-static">
                                            <span class="label-note-new"></span>
                                            <a href="javascript:void(0)">Vendor Catalog pages
                                                <i class="ecicon eci-angle-right"></i></a>
                                            <ul class="sub-menu sub-menu-child">
                                                <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">Blog full width</a></li>
                                        <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu">
                                        <li><a href="elemets-products.html">Products</a></li>
                                        <li><a href="elemets-typography.html">Typography</a></li>
                                        <li><a href="elemets-title.html">Titles</a></li>
                                        <li><a href="elemets-categories.html">Categories</a></li>
                                        <li><a href="elemets-buttons.html">Buttons</a></li>
                                        <li><a href="elemets-tabs.html">Tabs</a></li>
                                        <li><a href="elemets-accordions.html">Accordions</a></li>
                                        <li><a href="elemets-blog.html">Blogs</a></li>
                                    </ul>
                                </li>
                                <li><a href="offer.html">Hot Offers</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- ekka Mobile Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="javascript:void(0)">Categories</a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-left-sidebar-col-3.html">Left sidebar 3 column</a></li>
                                        <li><a href="shop-left-sidebar-col-4.html">Left sidebar 4 column</a></li>
                                        <li><a href="shop-right-sidebar-col-3.html">Right sidebar 3 column</a></li>
                                        <li><a href="shop-right-sidebar-col-4.html">Right sidebar 4 column</a></li>
                                        <li><a href="shop-full-width.html">Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Classic Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-banner-left-sidebar-col-3.html">Banner left sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-left-sidebar-col-4.html">Banner left sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-3.html">Banner right sidebar 3
                                                column</a></li>
                                        <li><a href="shop-banner-right-sidebar-col-4.html">Banner right sidebar 4
                                                column</a></li>
                                        <li><a href="shop-banner-full-width.html">Banner Full width 4 column</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">Columns Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                        <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                        <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:void(0)">List Variation</a>
                                    <ul class="sub-menu">
                                        <li><a href="shop-list-left-sidebar.html">Shop left sidebar</a></li>
                                        <li><a href="shop-list-right-sidebar.html">Shop right sidebar</a></li>
                                        <li><a href="shop-list-banner-left-sidebar.html">Banner left sidebar</a></li>
                                        <li><a href="shop-list-banner-right-sidebar.html">Banner right sidebar</a></li>
                                        <li><a href="shop-list-full-col-2.html">Full width 2 columns</a></li>
                                    </ul>
                                </li>
                                <li><a class="p-0" href="shop-left-sidebar-col-3.html"><img class="img-responsive"
                                            src="{{asset('public/frontend-assets') }}/images/menu-banner/1.jpg" alt=""></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Products</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Product page</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-left-sidebar.html">Product left sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Product right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product 360</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-360-left-sidebar.html">360 left sidebar</a></li>
                                        <li><a href="product-360-right-sidebar.html">360 right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product vodeo</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-video-left-sidebar.html">vodeo left sidebar</a></li>
                                        <li><a href="product-video-right-sidebar.html">vodeo right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Product gallery</a>
                                    <ul class="sub-menu">
                                        <li><a href="product-gallery-left-sidebar.html">Gallery left sidebar</a></li>
                                        <li><a href="product-gallery-right-sidebar.html">Gallery right sidebar</a></li>
                                    </ul>
                                </li>
                                <li><a href="product-full-width.html">Product full width</a></li>
                                <li><a href="product-360-full-width.html">360 full width</a></li>
                                <li><a href="product-video-full-width.html">Video full width</a></li>
                                <li><a href="product-gallery-full-width.html">Gallery full width</a></li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Others</a>
                            <ul class="sub-menu">
                                <li><a href="javascript:void(0)">Mail Confirmation</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-confirm-1.html">Mail Confirmation 1</a></li>
                                        <li><a href="email-template-confirm-2.html">Mail Confirmation 2</a></li>
                                        <li><a href="email-template-confirm-3.html">Mail Confirmation 3</a></li>
                                        <li><a href="email-template-confirm-4.html">Mail Confirmation 4</a></li>
                                        <li><a href="email-template-confirm-5.html">Mail Confirmation 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Reset password</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-forgot-password-1.html">Reset password 1</a></li>
                                        <li><a href="email-template-forgot-password-2.html">Reset password 2</a></li>
                                        <li><a href="email-template-forgot-password-3.html">Reset password 3</a></li>
                                        <li><a href="email-template-forgot-password-4.html">Reset password 4</a></li>
                                        <li><a href="email-template-forgot-password-5.html">Reset password 5</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Mail Promotional</a>
                                    <ul class="sub-menu">
                                        <li><a href="email-template-offers-1.html">Offer Mail 1</a></li>
                                        <li><a href="email-template-offers-2.html">Offer Mail 2</a></li>
                                        <li><a href="email-template-offers-3.html">Offer Mail 3</a></li>
                                        <li><a href="email-template-offers-4.html">Offer Mail 4</a></li>
                                        <li><a href="email-template-offers-5.html">Offer Mail 5</a></li>
                                        <li><a href="email-template-offers-6.html">Offer Mail 6</a></li>
                                        <li><a href="email-template-offers-7.html">Offer Mail 7</a></li>
                                        <li><a href="email-template-offers-8.html">Offer Mail 8</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="vendor-dashboard.html">Vendor Dashboard</a></li>
                                        <li><a href="vendor-profile.html">Vendor Profile</a></li>
                                        <li><a href="vendor-uploads.html">Vendor Uploads</a></li>
                                        <li><a href="vendor-settings.html">Vendor Settings</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">User Account Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="user-profile.html">User Profile</a></li>
                                        <li><a href="user-history.html">User History</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="track-order.html">Track Order</a></li>
                                        <li><a href="user-invoice.html">User Invoice</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Construction Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="404-error-page.html">404 Error Page</a></li>
                                        <li><a href="under-maintenance.html">Maintenance Page</a></li>
                                        <li><a href="coming-soon.html">Comming Soon Page</a></li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0)">Vendor Catalog Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="catalog-single-vendor.html">Catalog Single Vendor</a></li>
                                        <li><a href="catalog-multi-vendor.html">Catalog Multi Vendor</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="javascript:void(0)">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/about-us')}}">About Us</a></li>
                                <li><a href="{{url('/contact')}}">Contact Us</a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="compare.html">Compare</a></li>
                                <li><a href="{{url('/faq')}}">FAQ</a></li>
                                <li><a href="{{url('/customer/login')}}">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="track-order.html">Track Order</a></li>
                                <li><a href="terms-condition.html">Terms Condition</a></li>
                                <li><a href="privacy-policy.html">Privacy Policy</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog right sidebar</a></li>
                                <li><a href="blog-detail-left-sidebar.html">Blog detail left sidebar</a></li>
                                <li><a href="blog-detail-right-sidebar.html">Blog detail right sidebar</a></li>
                                <li><a href="blog-full-width.html">Blog full width</a></li>
                                <li><a href="blog-detail-full-width.html">Blog detail full width</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                            <ul class="sub-menu">
                                <li><a href="elemets-products.html">Products</a></li>
                                <li><a href="elemets-typography.html">Typography</a></li>
                                <li><a href="elemets-title.html">Titles</a></li>
                                <li><a href="elemets-categories.html">Categories</a></li>
                                <li><a href="elemets-buttons.html">Buttons</a></li>
                                <li><a href="elemets-tabs.html">Tabs</a></li>
                                <li><a href="elemets-accordions.html">Accordions</a></li>
                                <li><a href="elemets-blog.html">Blogs</a></li>
                            </ul>
                        </li>
                        <li><a href="offer.html">Hot Offers</a></li>
                    </ul>
                </div>
                <div class="header-res-lan-curr">
                    <div class="header-top-lan-curr">
                        <!-- Language Start -->
                        <div class="header-top-lan dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Language <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-curr dropdown">
                            <button class="dropdown-toggle text-upper" data-bs-toggle="dropdown">Currency <i
                                    class="ecicon eci-caret-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->
                    </div>
                    <!-- Social Start -->
                    <div class="header-res-social">
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- ekka mobile Menu End -->
    </header>
    <!-- Header End  -->

    <!-- Ekka Cart Start -->
    <div class="ec-side-cart-overlay"></div>
    <div id="ec-side-cart" class="ec-side-cart">
        <div class="ec-cart-inner">
            <div class="ec-cart-top">
                <div class="ec-cart-title">
                    <span class="cart_title">My Cart</span>
                    <button class="ec-close">×</button>
                </div>
                <ul class="eccart-pro-items">
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/93_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Mens Winter Leathers Jackets</a>
                            <span class="cart-price"><span>$49.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/96_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Running & Trekking Shoes - White</a>
                            <span class="cart-price"><span>$150.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Rose Gold Peacock Earrings</a>
                            <span class="cart-price"><span>$950.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="ec-cart-bottom">
                <div class="cart-sub-total">
                    <table class="table cart-table">
                        <tbody>
                            <tr>
                                <td class="text-left">Sub-Total :</td>
                                <td class="text-right">$300.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$60.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$360.00</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="cart_btn">
                    <a href="cart.html" class="btn btn-primary">View Cart</a>
                    <a href="checkout.html" class="btn btn-secondary">Checkout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Ekka Cart End -->

    <!-- Main Slider Start -->
    <div class="ec-main-slider section section-space-pb">
        <div class="container">
            <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Sale offer</h2>
                                    <h1 class="ec-slide-title">New Fashion Summer Sale</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>29</b>.99</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-2">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Trending item</h2>
                                    <h1 class="ec-slide-title">Women's latest fashion sale</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>20</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ec-slide-item swiper-slide d-flex slide-3">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Trending accessories</h2>
                                    <h1 class="ec-slide-title">Modern Sunglasses</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>15</b>.00</p>
                                        <a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination swiper-pagination-white"></div>
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            </div>
    </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <!--  For developer (More icons find in https://www.svgrepo.com/) -->
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row d-none">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">Top Category</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-15 margin-minus-t-15">
                <div id="ec-cat-slider" class="ec-cat-slider owl-carousel">
                <div class="ec_cat_content ec_cat_content_1">
                    <div class="ec_cat_inner ec_cat_inner-1">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/dress-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>dress & frock <span title="Category Items">(53)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_2">
                    <div class="ec_cat_inner ec_cat_inner-2">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/coat-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Winter wear <span title="Category Items">(58)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_3">
                    <div class="ec_cat_inner ec_cat_inner-3">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/glasses-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>glasses & lens <span title="Category Items">(76)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_4">
                    <div class="ec_cat_inner ec_cat_inner-4">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/shorts-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>shorts & jeans<span title="Category Items">(49)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_5">
                    <div class="ec_cat_inner ec_cat_inner-5">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/tee-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>T-shirts<span title="Category Items">(25)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_6">
                    <div class="ec_cat_inner ec_cat_inner-6">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/jacket-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>jacket<span title="Category Items">(35)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_7">
                    <div class="ec_cat_inner ec_cat_inner-7">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/watch-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>watch<span title="Category Items">(89)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_8">
                    <div class="ec_cat_inner ec_cat_inner-8">
                        <div class="ec-category-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/hat-8.svg" class="svg_img" alt="drink" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>hat & caps <span title="Category Items">(65)</span></h3>
                            <a href="shop-left-sidebar-col-3.html" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">

                <!-- Sidebar area start -->
                <div class="ec-side-cat-overlay"></div>
                    <div class="col-lg-3 sidebar-dis-991" data-animation="fadeIn">
                        <div class="cat-sidebar">
                            <div class="cat-sidebar-box">
                                <div class="ec-sidebar-wrap">
                                    <!-- Sidebar Category Block -->
                                    <div class="ec-sidebar-block">
                                        <div class="ec-sb-title">
                                            <h3 class="ec-sidebar-title">Category<button class="ec-close">×</button></h3>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/dress-8.svg" class="svg_img" alt="drink" />Cothes</div>
                                                    <ul style="display: block;">
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Shirt <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shorts & jeans <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">jacket<span title="Available Stock">- 500</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">dress & frock  <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/shoes-8.svg" class="svg_img" alt="drink" />Footwear</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sports <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Formal <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Casual <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">safety shoes <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/jewelry-8.svg" class="svg_img" alt="drink" />jewelry</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Earrings <span title="Available Stock">- 50</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Couple Rings <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Necklace <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/perfume-8.svg" class="svg_img" alt="drink" />perfume</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Clothes perfume<span title="Available Stock">- 4 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">deodorant <span title="Available Stock">- 52 pcs</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Flower fragrance <span title="Available Stock">- 10 pack</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Air Freshener<span title="Available Stock">- 35 pack</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/cosmetics-8.svg" class="svg_img" alt="drink" />cosmetics</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shampoo<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunscreen<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">body wash<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">makeup kit<span title="Available Stock"></span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/glasses-8.svg" class="svg_img" alt="drink" />glasses</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Sunglasses <span title="Available Stock">- 20</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Lenses <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ec-sb-block-content">
                                            <ul>
                                                <li>
                                                    <div class="ec-sidebar-block-item"><img src="{{asset('public/frontend-assets') }}/images/icons/bag-8.svg" class="svg_img" alt="drink" />bags</div>
                                                    <ul>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">shopping bag <span title="Available Stock">- 25</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">Gym backpack <span title="Available Stock">- 52</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">purse <span title="Available Stock">- 40</span></a>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="ec-sidebar-sub-item"><a href="shop-left-sidebar-col-3.html">wallet <span title="Available Stock">- 35</span></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- Sidebar Category Block -->
                                    <!-- Sidebar Price Block -->
                                    <div class="ec-sidebar-block ec-price-clock">
                                        <div class="ec-sb-title">
                                            <h3 class="ec-sidebar-title">Price</h3>
                                        </div>
                                        <div class="ec-sb-block-content es-price-slider">
                                            <div class="ec-price-filter">
                                                <div id="ec-sliderPrice" class="filter__slider-price" data-min="0"
                                                    data-max="250" data-step="5"></div>
                                                <div class="ec-price-input">
                                                    <label class="filter__label"><input type="text"
                                                            class="filter__input"></label>
                                                    <span class="ec-price-divider"></span>
                                                    <label class="filter__label"><input type="text"
                                                            class="filter__input"></label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-sidebar-slider">
                                <div class="ec-sb-slider-title">Best Sellers</div>
                                <div class="ec-sb-pro-sl">
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/1.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">baby fabric shoes</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$5.00</span>
                                                    <span class="new-price">$4.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/2.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's hoodies t-shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$10.00</span>
                                                    <span class="new-price">$7.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/3.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls t-shirt</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$5.00</span>
                                                    <span class="new-price">$3.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/4.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">woolen hat for men</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$12.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/5.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens purse</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$12.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/6.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy doctor kit</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$50.00</span>
                                                    <span class="new-price">$45.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/7.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">teddy bear baby toy</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$35.00</span>
                                                    <span class="new-price">$25.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="ec-sb-pro-sl-item">
                                            <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                                    src="{{asset('public/frontend-assets') }}/images/product-image/2.jpg" alt="product" /></a>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens hoodies blue</a></h5>
                                                <div class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </div>
                                                <span class="ec-price">
                                                    <span class="old-price">$15.00</span>
                                                    <span class="new-price">$13.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>

                <!-- Product area start -->
                <div class="col-lg-9 col-md-12">

                    <!-- ec New Arrivals, ec Trending, ec Top Rated Start -->
                    <div class="row">
                        <!-- ec New Arrivals -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">New Arrivals</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/88_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/89_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls pnk Embro design Top</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/90_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Floral Wrap Midi Skirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Clothes</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/91_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pure Garment Dyed Cotton Shirt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Mens fashion</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/92_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">MEN Yarn Fleece Full-Zip Jacket</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">winter wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/93_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Winter wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/94_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jackets</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/95_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Better Basics French Terry Sweatshorts</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">shorts</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Trending -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Trending</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/96_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Running & Trekking Shoes - White</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/97_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/98_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">party wear</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/99_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sports Claw Women's Shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/100_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Air Trekking Shoes - white</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">sports</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/101_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boot With Suede Detail</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">boots</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/102_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's Leather Formal Wear shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">formal</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/103_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Casual Men's Brown shoes</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Casual</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec Top Rated -->
                        <div class="col-lg-4 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content m-auto" data-animation="fadeIn">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Top Rated</h2>
                                </div>
                            </div>
                            <div class="ec-new-slider">
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/112_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">platinum Zircon Classic Ring</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$62.00</span>
                                                        <span class="old-price">$65.00</span>
                                                        <span class="qty">- 1 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/105_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart watche Vital Plus</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Watches</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$56.00</span>
                                                        <span class="old-price">$78.00</span>
                                                        <span class="qty">- 3 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">cosmetics</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$25.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 250 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$20.00</span>
                                                        <span class="old-price">$30.00</span>
                                                        <span class="qty">- 12 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/106_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pocket Watch Leather Pouch</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">watches</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$50.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 2 pack</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/107_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">jewellery</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$52.00</span>
                                                        <span class="old-price">$55.00</span>
                                                        <span class="qty">- 1 pcs</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/108_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">perfume</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$10.00</span>
                                                        <span class="old-price">$11.00</span>
                                                        <span class="qty">- 500 g</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 ec-all-product-block">
                                    <div class="ec-all-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/109_1.jpg"
                                                        alt="Product" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">men's Leather Reversible Belt</a></h5>
                                            <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">belts</a></h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">$42.00</span>
                                                        <span class="old-price">$45.00</span>
                                                        <span class="qty">- 5 kg</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ec New Arrivals, ec Trending, ec Top Rated end -->

                    <!-- Deal of the day Start -->
                    <div class="row space-t-50" data-animation="fadeIn">
                        <!--  Special Section Start -->
                        <div class="ec-spe-section col-lg-12 col-md-12 col-sm-12 sectopn-spc-mb">
                            <div class="col-md-12">
                                <div class="section-title">
                                    <h2 class="ec-title">Deal of the day</h2>
                                </div>
                            </div>

                            <div class="ec-spe-products">
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Rose Gold diamonds Earring</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$1990.00</span>
                                                <span class="old-price">$2000.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>15</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-1"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="ec-spe-product">
                                    <div class="ec-spe-pro-inner">
                                        <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-image">
                                                <img class="img-responsive"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-content col-md-6 col-sm-12">
                                            <div class="ec-spe-pro-rating">
                                                <span class="ec-spe-rating-icon">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">shampoo, conditioner & facewash packs</a></h5>
                                            <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                                dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                            <div class="ec-spe-price">
                                                <span class="new-price">$150.00</span>
                                                <span class="old-price">$200.00</span>
                                            </div>
                                            <div class="ec-spe-pro-btn">
                                                <a href="#" class="btn btn-lg btn-primary">Add To Cart</a>
                                            </div>
                                            <div class="ec-spe-pro-progress">
                                                <span class="ec-spe-pro-progress-desc"><span>Already Sold:
                                                        <b>20</b></span><span>Available: <b>40</b></span></span>
                                                <span class="ec-spe-pro-progressbar"></span>
                                            </div>
                                            <div class="countdowntimer">
                                                <span class="ec-spe-count-desc"> Hurry Up! Offer ends in:</span>
                                                <span id="ec-spe-count-2"></span>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  Special Section End -->
                    </div>
                    <!-- Deal of the day end -->

                    <!-- Product tab area start -->
                    <div class="row space-t-50">
                        <div class="col-md-12">
                            <div class="section-title">
                                <h2 class="ec-title">New Products</h2>
                            </div>
                        </div>

                        <!-- Tab Start -->
                        <div class="col-md-12 ec-pro-tab">
                            <ul class="ec-pro-tab-nav nav justify-content-end">
                                <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                        href="#all">All</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#clothes">Clothes</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                        href="#footwear">Footwear</a></li>
                                <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                            href="#accessories">accessories</a></li>
                            </ul>
                        </div>
                        <!-- Tab End -->
                    </div>
                    <div class="row margin-minus-b-15">
                        <div class="col">
                            <div class="tab-content">
                                <!-- 1st Product tab start -->
                                <div class="tab-pane fade show active" id="all">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/88_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/88_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="percentage">20%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">T-Shirt</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/97_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/97_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Sports</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$64.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/107_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/107_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">jewellery</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$650.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/108_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/108_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Perfume</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$20.00</span>
                                                            <span class="old-price">$21.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">cosmetics</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/94_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="percentage">15%</span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Jackets</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$59.00</span>
                                                            <span class="old-price">$87.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/98_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/98_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">party wear</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$30.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">jewellery</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$10.00</span>
                                                            <span class="old-price">$12.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 1st Product tab end -->
                                <!-- ec 2nd Product tab start -->
                                <div class="tab-pane fade" id="clothes">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/94_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Jackets</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$59.00</span>
                                                            <span class="old-price">$87.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/95_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/95_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Shorts</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Better Basics French Terry Sweatshorts</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$78.00</span>
                                                            <span class="old-price">$85.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/88_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/88_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">T-Shirt</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Relaxed Short full Sleeve T-Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/89_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/89_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">top</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Girls pnk Embro design Top</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$45.00</span>
                                                            <span class="old-price">$50.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/90_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/90_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Skirt</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Black Floral Wrap Midi Skirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$35.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/91_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/91_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Shirt</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pure Garment Dyed Cotton Shirt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$45.00</span>
                                                            <span class="old-price">$56.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/92_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/92_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Jacket</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">MEN Yarn Fleece Full-Zip Jacket</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$49.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/93_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/93_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Jacket</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$32.00</span>
                                                            <span class="old-price">$45.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 2nd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="footwear">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/96_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/96_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Sports</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Running & Trekking Shoes - White</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$89.00</span>
                                                            <span class="old-price">$95.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/97_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/97_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Sports</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Trekking & Running Shoes - black</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$58.00</span>
                                                            <span class="old-price">$64.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/98_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/98_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">party wear</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Womens Party Wear Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$30.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/99_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/99_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Sports</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sports Claw Women's Shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$70.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/100_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/100_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Sports</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Air Trekking Shoes - white</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$62.00</span>
                                                            <span class="old-price">$80.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/104_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/104_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Boots</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Boot With Suede Detail</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$65.00</span>
                                                            <span class="old-price">$70.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/102_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/102_1.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Formal</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Men's Leather Formal Wear shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$65.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/103_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/103_1.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Casual</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Casual Men's Brown shoes</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$99.00</span>
                                                            <span class="old-price">$105.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                                <!-- ec 3rd Product tab start -->
                                <div class="tab-pane fade" id="accessories">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/105_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/105_2.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">watches</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Smart watche Vital Plus</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$100.00</span>
                                                            <span class="old-price">$120.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/106_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/106_2.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Watches</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Pocket Watch Leather Pouch</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$150.00</span>
                                                            <span class="old-price">$170.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/107_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/107_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">jewellery</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Silver Deer Heart Necklace</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$650.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/108_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/108_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Perfume</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Titan 100 Ml Womens Perfume</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$20.00</span>
                                                            <span class="old-price">$21.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/109_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/109_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="new">New</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Belt</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">men's Leather Reversible Belt</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$25.00</span>
                                                            <span class="old-price">$35.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/110_1.jpg" alt="Product" />
                                                        </a>
                                                        <span class="flags">
                                                            <span class="sale">Sale</span>
                                                        </span>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                        class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">cosmetics</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">shampoo conditioner packs</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$50.00</span>
                                                            <span class="old-price">$60.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">jewellery</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Rose Gold Peacock Earrings</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$10.00</span>
                                                            <span class="old-price">$12.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                            <div class="ec-product-inner">
                                                <div class="ec-pro-image-outer">
                                                    <div class="ec-pro-image">
                                                        <a href="product-left-sidebar.html" class="image">
                                                            <img class="main-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/112_1.jpg" alt="Product" />
                                                            <img class="hover-image"
                                                                src="{{asset('public/frontend-assets') }}/images/product-image/112_1.jpg" alt="Product" />
                                                        </a>
                                                        <div class="ec-pro-actions">
                                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="#" class="ec-btn-group quickview"
                                                                data-link-action="quickview" title="Quick view"
                                                                data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="compare.html" class="ec-btn-group compare"
                                                                title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                            <a href="javascript:void(0)"  title="Add To Cart" class="ec-btn-group add-to-cart"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                                                    class="svg_img pro_svg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ec-pro-content">
                                                    <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">jewellery</h6></a>
                                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">platinum Zircon Classic Ring</a></h5>
                                                    <div class="ec-pro-rat-price">
                                                        <span class="ec-pro-rating">
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star fill"></i>
                                                            <i class="ecicon eci-star"></i>
                                                        </span>
                                                        <span class="ec-price">
                                                            <span class="new-price">$850.00</span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- ec 3rd Product tab end -->
                            </div>
                        </div>
                    </div>
                    <!-- Product tab area end -->

                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  Testimonial, Banner & Service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container" data-animation="fadeIn">
            <div class="row">
                <!-- ec Testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-6 col-sm-12 col-xs-6 sectopn-spc-mb" data-animation="slideInRight">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Testimonial</h2>
                        </div>
                    </div>
                    <div class="ec-test-outer">
                        <ul id="ec-testimonial-slider">
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{asset('public/frontend-assets') }}/images/testimonial/1.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{asset('public/frontend-assets') }}/images/testimonial/2.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="ec-test-item">
                                <div class="ec-test-inner">
                                    <div class="ec-test-img">
                                        <img alt="testimonial" title="testimonial"
                                            src="{{asset('public/frontend-assets') }}/images/testimonial/3.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
                                                alt="" />
                                        </div>
                                        <div class="ec-test-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                            dolor dolor sit amet.
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ec Testimonial end -->
                <!-- ec Banner Start -->
                <div class="col-md-6 col-sm-12" data-animation="fadeIn">
                    <div class="ec-banner-inner">
                        <div class="ec-banner-block ec-banner-block-1">
                            <div class="banner-block">
                                <div class="banner-content">
                                    <div class="banner-text">
                                        <span class="ec-banner-disc">25% discount</span>
                                        <span class="ec-banner-title">Vegetables & Fruits</span>
                                        <span class="ec-banner-stitle">Starting @ $10</span>
                                    </div>
                                    <span class="ec-banner-btn"><a href="shop-left-sidebar-col-3.html">Shop Now <i
                                                class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Banner End -->
                <!--  Service Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3" data-animation="slideInLeft">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Our Services</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/service_4_1.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Worldwide Delivery</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_2 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/service_4_2.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Next Day delivery</h2>
                                    <p>UK Orders Only</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_3 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/service_4_3.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Best Online Support</h2>
                                    <p>Hours: 8AM -11PM</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_4 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/service_4_4.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>Return Policy</h2>
                                    <p>Easy & Free Return</p>
                                </div>
                            </div>
                        </div>
                        <div class="ec_ser_content ec_ser_content_5 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/service_4_5.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>30% money back</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ec Service End -->
            </div>
        </div>
    </section>
    <!--  End Testimonial, Banner & Service Section Start -->

    <!--  Blog Section Start -->
    <section class="section ec-blog-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blog-slider owl-carousel" data-animation="fadeIn">
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/2.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Clothes</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Curbside fashion Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Robin</span> / Jan 18, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/3.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Fashion</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Clothes Retail KPIs 2021 Guide for Clothes Executives.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Apr 06, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/4.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Shoes</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">EBT vendors: Claim Your Share of SNAP Online Revenue.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Selsa</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/5.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Electronics</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Curbside fashion Trends: How to Win the Pickup Battle.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Pawar</span> / Mar 15, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/6.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Glasses</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">6 fashion Retail Industry Digital Strategies for 2021.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Natly</span> / Jun 02, 2022</div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-blog-block">
                        <div class="ec-blog-inner">
                            <div class="ec-blog-image">
                                <a href="blog-detail-left-sidebar.html">
                                    <img class="blog-image" src="{{asset('public/frontend-assets') }}/images/blog-image/7.jpg"
                                        alt="Blog" />
                                </a>
                            </div>
                            <div class="ec-blog-content">
                                <div class="ec-blog-cat"><a href="blog-left-sidebar.html">Jewellery</a></div>
                                <h5 class="ec-blog-title"><a
                                        href="blog-detail-left-sidebar.html">Why Should be Concerned About Instacart Patents.</a></h5>

                                <div class="ec-blog-date">By<span>Mr Admin</span> / Feb 10, 2022</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  Blog Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <div class="container">
            <h2 class="d-none">Instagram</h2>
            <div class="ec-insta-wrapper" data-animation="fadeIn">
                <div class="ec-insta-outer">
                    <div class="insta-auto">
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/1.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/2.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/3.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/4.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/5.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/6.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/7.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                        <div class="ec-insta-item">
                            <div class="ec-insta-inner">
                                <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/3.jpg" alt="">

                                </a>
                            </div>
                        </div>
                        <!-- instagram item -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-newletter section-space-footer-p">
            <div class="container">
                <div class="row">
                    <div class="footer-cat-inner">
                        <div class="footer-cat-block">
                            <div class="footer-cat-stitle">Brands Directory</div>
                            <div class="block">
                                <span class="footer-cat-title">Fashion : </span>
                                <a href="shop-left-sidebar-col-3.html">T-shirt</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Shirts</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">shorts & jeans </a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">jacket</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">dress & frock</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">innerwear</a>
                                <a href="shop-left-sidebar-col-3.html">hosiery</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">footwear : </span>
                                <a href="shop-left-sidebar-col-3.html">sport</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">formal</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Boots</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">casual</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">cowboy shoes</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">safety shoes</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Party wear shoes</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Branded</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Firstcopy</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Long shoes</a>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">jewellery : </span>
                                <a href="shop-left-sidebar-col-3.html">Necklace</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Earrings</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Couple rings</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Pendants</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Crystal</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Bangles</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">bracelets</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">nosepin</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">chain</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Earrings</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Couple rings</a><span> | </span>
                            </div>
                            <div class="block">
                                <span class="footer-cat-title">cosmetics : </span>
                                <a href="shop-left-sidebar-col-3.html">Shampoo</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Bodywash</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Facewash</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">makeup kit</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">liner</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">lipstick</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">prefume</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">Body shop</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">scrub</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">hair gel</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">hair colors</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">hair dye</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">sunscreen</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">skin loson</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">liner</a><span> | </span>
                                <a href="shop-left-sidebar-col-3.html">lipstick</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-cat">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Popular Categories</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Fashion</a></li>
                                        <li class="ec-footer-link"><a href="#">Electronic</a></li>
                                        <li class="ec-footer-link"><a href="#">Cosmetic</a></li>
                                        <li class="ec-footer-link"><a href="#">Health</a></li>
                                        <li class="ec-footer-link"><a href="#">Watches</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Products</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/contact')}}">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Our Company</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Legal Notice</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms and conditions</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/about-us')}}">About us</a></li>
                                        <li class="ec-footer-link"><a href="checkout.html">Secure payment</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Prices drop</a></li>
                                        <li class="ec-footer-link"><a href="#">New products</a></li>
                                        <li class="ec-footer-link"><a href="#">Best sales</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/contact')}}">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Sitemap</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-cont-social">
                            <div class="ec-footer-contact">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading">Contact</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link ec-foo-location"><span><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/foo-location.svg"
                                                        class="svg_img foo_svg" alt="" /></span>
                                                <p>2548 Broaddus Maple Court, Madisonville KY 4783, USA</p>
                                            </li>
                                            <li class="ec-footer-link ec-foo-call"><span><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/foo-wp.svg" class="svg_img foo_svg"
                                                        alt="" /></span><a href="tel:+919999999999">+91 999 999 9999</a>
                                            </li>
                                            <li class="ec-footer-link ec-foo-mail"><span><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/foo-mail.svg" class="svg_img foo_svg"
                                                        alt="" /></span><a
                                                    href="mailto:support@demo.email">support@demo.email</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-footer-social">
                                <div class="ec-footer-widget">
                                    <h4 class="ec-footer-heading marg-b-0 s-head">Follow Us</h4>
                                    <div class="ec-footer-links">
                                        <ul class="align-items-center">
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-instagram"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-twitter-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-facebook-square"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="ec-footer-link"><a href="#"><i class="ecicon eci-linkedin-square"
                                                            aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <!-- Footer payment -->
                        <div class="footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-center">
                                <div class="payment-link">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                        <!-- Footer Copyright Start -->
                        <div class="footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © <a class="site-name" href="{{url('/')}}">Ekka</a> all
                                    rights reserved. Powered by Ekka</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->

                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/93_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/93_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/93_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/93_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/94_2.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Mens Winter Leathers Jackets</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="new-price">$199.00</span>
                                    <span class="old-price">$200.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>250 g</span></li>
                                                <li><span>500 g</span></li>
                                                <li><span>1 kg</span></li>
                                                <li><span>2 kg</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Click To Call -->
    <div class="ec-cc-style cc-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cc-panel">
            <!-- Panel Content -->
            <div class="cc-header">
                <img src="{{asset('public/frontend-assets') }}/images/whatsapp/profile_01.jpg" alt="profile image"/>
                <h2>John Mark</h2>
                <p>Tachnical Manager</p>
            </div>
            <div class="cc-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just give me a call.</p>
            </div>
            <div class="cc-footer">
                <a href="tel:+919099153528" class="cc-call-button">
                    <span>Call me</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                    <path d="M1,5 L11,5"></path>
                    <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button-->
        <div class="cc-button cc-right-bottom">
            <img src="{{asset('public/frontend-assets') }}/images/icons/call.svg" class="svg_img cc-call-svg" alt="call image" />
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div class="row">
            <div class="col-md-7 disp-no-767">
                <img src="{{asset('public/frontend-assets') }}/images/banner/newsletter-8.png" alt="newsletter">
            </div>
            <div class="col-md-5">
                <div id="ec-popnews-box-content">
                    <h2>Subscribe Newsletter.</h2>
                    <p>Subscribe the ekka ecommerce to get in touch and get the future update. </p>
                    <form id="ec-popnews-form" action="#" method="post">
                        <input type="email" name="newsemail" placeholder="Email Address" required />
                        <button type="button" class="btn btn-primary" name="subscribe">Subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="{{asset('public/frontend-assets') }}/images/icons/menu.svg" class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="{{asset('public/frontend-assets') }}/images/icons/cart.svg" class="svg_img header_svg" alt="icon" /><span
                            class="ec-cart-noti ec-header-count ec-cart-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{url('/')}}" class="ec-header-btn"><img src="{{asset('public/frontend-assets') }}/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="{{asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-sidebar" class="ec-header-btn ec-sidebar-toggle d-lg-none">
                        <img src="{{asset('public/frontend-assets') }}/images/icons/category-icon.svg" class="svg_img header_svg" alt="icon" />
                    </a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="{{asset('public/frontend-assets') }}/images/product-image/111_1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>Rose Gold Earrings</h6>
            <p>2 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/popper.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->

    <script src="{{asset('public/frontend-assets') }}/js/plugins/jquery.sticky-sidebar.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/countdownTimer.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/nouislider.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/scrollup.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/slick.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/owl.carousel.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/infiniteslidev2.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/click-to-call.js"></script>

    <!-- Main Js -->
    <script src="{{asset('public/frontend-assets') }}/js/vendor/index.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/demo-8.js"></script>
</body>

</html>
