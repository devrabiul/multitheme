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

     <title>{{ env('APP_NAME') }}</title>
     <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="assets/images/favicon/favicon.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="assets/images/favicon/favicon.png" />
    <meta name="msapplication-TileImage" content="assets/images/favicon/favicon.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/nouislider.css" />
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <!-- Background css -->
    <link rel="stylesheet" id="bg-switcher-css" href="assets/css/backgrounds/bg-4.css">

</head>
<body class="blog_page">
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
                                        src="assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="assets/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count">4</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="assets/images/icons/cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count cart-count-lable">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <img src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="icon" />
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
                                <a href="{{url('/')}}"><img src="assets/images/logo/logo.png" alt="Site Logo" /><img
                                        class="dark-logo" src="assets/images/logo/dark-logo.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center">
                            <div class="header-search">
                                <form class="ec-btn-group-form" action="#">
                                    <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                    <button class="submit" type="submit"><img src="assets/images/icons/search.svg"
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
                                            src="assets/images/icons/user.svg" class="svg_img header_svg" alt="" /></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="wishlist.html" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="assets/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count">4</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="assets/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count cart-count-lable">3</span>
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
                            <a href="{{url('/')}}"><img src="assets/images/logo/logo.png" alt="Site Logo" /><img
                                    class="dark-logo" src="assets/images/logo/dark-logo.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col">
                        <div class="header-search">
                            <form class="ec-btn-group-form" action="#">
                                <input class="form-control" placeholder="Enter Your Product Name..." type="text">
                                <button class="submit" type="submit"><img src="assets/images/icons/search.svg"
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
                                                            class="img-responsive" src="assets/images/menu-banner/1.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                            class="img-responsive" src="assets/images/menu-banner/2.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                            class="img-responsive" src="assets/images/menu-banner/3.jpg"
                                                            alt=""></a></li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                            class="img-responsive" src="assets/images/menu-banner/4.jpg"
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
                        <li><a href="javascript:void(0)">Home</a>
                            <ul class="sub-menu">
                                <li><a href="{{url('/')}}">Fashion 1</a></li>




                            </ul>
                        </li>

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
                                            src="assets/images/menu-banner/1.jpg" alt=""></a>
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

    <!-- ekka Cart Start -->
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
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/6_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">T-shirt For Women</a>
                            <span class="cart-price"><span>$76.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/12_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Women Leather Shoes</a>
                            <span class="cart-price"><span>$64.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidekka_pro_img"><img
                                src="assets/images/product-image/3_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Girls Nylon Purse</a>
                            <span class="cart-price"><span>$59.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="javascript:void(0)" class="remove">×</a>
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
    <!-- ekka Cart End -->

    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Blog Page</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Blog Page</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Blog page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blogs-rightside col-lg-12 col-md-12">

                    <!-- Blog content Start -->
                    <div class="ec-blogs-content">
                        <div class="ec-blogs-inner">
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/1.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">The best fashion influencers.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/2.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">Summer Trending Fashion Market.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/3.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">Fashion Market Reveals Her Jacket.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/4.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">Winter 2021 Trending Fashion Market.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/5.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">Vogue Shopping Weekend 2021.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 mb-6 ec-blog-block">
                                    <div class="ec-blog-inner">
                                        <div class="ec-blog-image">
                                            <a href="blog-detail-left-sidebar.html">
                                                <img class="blog-image" src="assets/images/blog-image/6.jpg"
                                                    alt="Blog" />
                                            </a>
                                        </div>
                                        <div class="ec-blog-content">
                                            <h5 class="ec-blog-title"><a
                                                    href="blog-detail-left-sidebar.html">The best fashion influencers.</a></h5>

                                            <div class="ec-blog-date">By <span>Mr Admin</span> / February 10, 2021-2022</div>
                                            <div class="ec-blog-desc">Lorem Ipsum is simply dummy text of the printing
                                                and typesetting industry. Lorem Ipsum has been the industry's standard
                                                dummy text ever since the 1500s,</div>

                                            <div class="ec-blog-btn"><a href="#" class="btn btn-primary">Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Blog content End -->
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <footer class="ec-footer section-space-mt">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                            <span>Win a contest! Get this limited-editon</span><a href="#" target="_blank">View
                                Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="assets/images/logo/footer-logo.png"
                                            alt=""><img class="dark-footer-logo" src="assets/images/logo/dark-logo.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Contact us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, east california.</li>
                                        <li class="ec-footer-link"><span>Call Us:</span><a href="tel:+440123456789">+44
                                                0123 456 789</a></li>
                                        <li class="ec-footer-link"><span>Email:</span><a
                                                href="mailto:example@ec-email.com">+example@ec-email.com</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Information</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="{{url('/about-us')}}">About us</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/faq')}}">FAQ</a></li>
                                        <li class="ec-footer-link"><a href="#">Delivery Information</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/contact')}}">Contact us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Account</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">My Account</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                        <li class="ec-footer-link"><a href="#">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="#">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-service">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Services</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Discount Returns</a></li>
                                        <li class="ec-footer-link"><a href="#">Policy & policy </a></li>
                                        <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Get instant updates about our new products and
                                            special promos!</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email here..." name="ec-email" value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer social Start -->
                        <div class="col text-left footer-bottom-left">
                            <div class="footer-bottom-social">
                                <span class="social-text text-upper">Follow us on:</span>
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a class="hdr-facebook" href="#"><i class="ecicon eci-facebook"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-twitter" href="#"><i class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-instagram" href="#"><i class="ecicon eci-instagram"></i></a></li>
                                    <li class="list-inline-item"><a class="hdr-linkedin" href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer social End -->
                        <!-- Footer Copyright Start -->
                        <div class="col text-center footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">Copyright © 2021-2022 <a class="site-name text-upper"
                                        href="#">ekka<span>.</span></a>. All Rights Reserved</div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Footer navigation panel for responsive display -->
    <div class="ec-nav-toolbar">
        <div class="container">
            <div class="ec-nav-panel">
                <div class="ec-nav-panel-icons">
                    <a href="#ec-mobile-menu" class="navbar-toggler-btn ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/menu.svg" class="svg_img header_svg" alt="" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="#ec-side-cart" class="toggle-cart ec-header-btn ec-side-toggle"><img
                            src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /><span
                            class="ec-cart-noti ec-header-count cart-count-lable">3</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{url('/')}}" class="ec-header-btn"><img src="assets/images/icons/home.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="wishlist.html" class="ec-header-btn"><img src="assets/images/icons/wishlist.svg"
                            class="svg_img header_svg" alt="icon" /><span class="ec-cart-noti">4</span></a>
                </div>
                <div class="ec-nav-panel-icons">
                    <a href="{{url('/customer/login')}}" class="ec-header-btn"><img src="assets/images/icons/user.svg"
                            class="svg_img header_svg" alt="icon" /></a>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer navigation panel for responsive display end -->

    <!-- Recent Purchase Popup  -->
    <div class="recent-purchase">
        <img src="assets/images/product-image/1.jpg" alt="payment image">
        <div class="detail">
            <p>Someone in new just bought</p>
            <h6>stylish baby shoes</h6>
            <p>10 Minutes ago</p>
        </div>
        <a href="javascript:void(0)" class="icon-btn recent-close">×</a>
    </div>
    <!-- Recent Purchase Popup end -->

    <!-- Cart Floating Button -->
    <div class="ec-cart-float">
        <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
            <div class="header-icon"><img src="assets/images/icons/cart.svg" class="svg_img header_svg" alt="" /></div>
            <span class="ec-cart-count cart-count-lable">3</span>
        </a>
    </div>
    <!-- Cart Floating Button end -->

    <!-- Whatsapp -->
    <div class="ec-style ec-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="ec-panel">
            <!-- Panel Header -->
            <div class="ec-header">
                <strong>Need Help?</strong>
                <p>Chat with us on WhatsApp</p>
            </div>
            <!-- Panel Content -->
            <div class="ec-body">
                <ul>
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_01.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Sahar Darya</span>
                                    <p>Sahar left 7 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_02.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-online"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Yolduz Rafi</span>
                                    <p>Yolduz is online</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_03.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Nargis Hawa</span>
                                    <p>Nargis left 30 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                    <!-- Start Single Contact List -->
                    <li>
                        <a class="ec-list" data-number="918866774266"
                            data-message="Please help me! I have got wrong product - ORDER ID is : #654321485">
                            <div class="d-flex bd-highlight">
                                <!-- Profile Picture -->
                                <div class="ec-img-cont">
                                    <img src="assets/images/whatsapp/profile_04.jpg" class="ec-user-img"
                                        alt="Profile image">
                                    <span class="ec-status-icon ec-offline"></span>
                                </div>
                                <!-- Display Name & Last Seen -->
                                <div class="ec-user-info">
                                    <span>Khadija Mehr</span>
                                    <p>Khadija left 50 mins ago</p>
                                </div>
                                <!-- Chat iCon -->
                                <div class="ec-chat-icon">
                                    <i class="fa fa-whatsapp"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!--/ End Single Contact List -->
                </ul>
            </div>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button-->
        <div class="ec-right-bottom">
            <div class="ec-box">
                <div class="ec-button rotateBackward">
                    <img class="whatsapp" src="assets/images/common/whatsapp.png" alt="whatsapp icon" />
                </div>
            </div>
        </div>
        <!--/ End Right Floating Button-->
    </div>
    <!-- Whatsapp end -->

    <!-- Feature tools -->
    <div class="ec-tools-sidebar-overlay"></div>
    <div class="ec-tools-sidebar">
        <div class="tool-title">
            <h3>Features</h3>
        </div>
        <a href="#" class="ec-tools-sidebar-toggle in-out">
            <img alt="icon" src="assets/images/common/settings.png">
        </a>
        <div class="ec-tools-detail">
            <div class="ec-tools-sidebar-content ec-change-color ec-color-desc">
                <h3>Color Scheme</h3>
                <ul class="bg-panel">
                    <li class="active" data-color="01"><a href="#" class="colorcode1"></a></li>
                    <li data-color="02"><a href="#" class="colorcode2"></a></li>
                    <li data-color="03"><a href="#" class="colorcode3"></a></li>
                    <li data-color="04"><a href="#" class="colorcode4"></a></li>
                    <li data-color="05"><a href="#" class="colorcode5"></a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Backgrounds</h3>
                <ul class="bg-panel">
                    <li class="bg"><a class="back-bg-1" id="bg-1">Background-1</a></li>
                    <li class="bg"><a class="back-bg-2" id="bg-2">Background-2</a></li>
                    <li class="bg"><a class="back-bg-3" id="bg-3">Background-3</a></li>
                    <li class="bg"><a class="back-bg-4" id="bg-4">Default</a></li>
                </ul>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Full Screen mode</h3>
                <div class="ec-fullscreen-mode">
                    <div class="ec-fullscreen-switch">
                        <div class="ec-fullscreen-btn">Mode</div>
                        <div class="ec-fullscreen-on">On</div>
                        <div class="ec-fullscreen-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Dark mode</h3>
                <div class="ec-change-mode">
                    <div class="ec-mode-switch">
                        <div class="ec-mode-btn">Mode</div>
                        <div class="ec-mode-on">On</div>
                        <div class="ec-mode-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>RTL mode</h3>
                <div class="ec-change-rtl">
                    <div class="ec-rtl-switch">
                        <div class="ec-rtl-btn">Rtl</div>
                        <div class="ec-rtl-on">On</div>
                        <div class="ec-rtl-off">Off</div>
                    </div>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Language</h3>
                <div class="ec-change-lang">
                    <span id="google_translate_element"></span>
                </div>
            </div>
            <div class="ec-tools-sidebar-content">
                <h3>Clear local storage</h3>
                <a class="clear-cach" href="javascript:void(0)">Clear Cache & Default</a>
            </div>
        </div>
    </div>
    <!-- Feature tools end -->

    <!-- Vendor JS -->
    <script src="assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/countdownTimer.min.js"></script>
    <script src="assets/js/plugins/scrollup.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/infiniteslidev2.js"></script>
    <script src="assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.js"></script>
    <!-- Google translate Js -->
    <script src="assets/js/vendor/google-translate.js"></script>
    <script>
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
        }
    </script>
    <!-- Main Js -->
    <script src="assets/js/vendor/index.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
