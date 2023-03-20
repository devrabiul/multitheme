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
    <link rel="icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-5.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-5.png" />
    <meta name="msapplication-TileImage" content="{{asset('public/frontend-assets') }}/images/favicon/favicon-5.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/demo5.css" />

</head>
<body>
    <div id="ec-overlay"><span class="loader_img"></span></div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">
                    <!-- Header Top phone Start -->
                    <div class="col header-top-left">
                        <!-- Social Start -->
                        <div class="header-top-social">
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                            </ul>
                        </div>
                        <!-- Social End -->
                    </div>
                    <!-- Header Top phone End -->
                    <!-- Header Top call Start -->
                    <div class="col header-top-center">
                        <!-- Language Start -->
                        <div class="header-top-lan-curr header-top-lan dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">English <i
                                    class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Italiano</a></li>
                            </ul>
                        </div>
                        <!-- Language End -->
                        <!-- Currency Start -->
                        <div class="header-top-lan-curr header-top-curr dropdown">
                            <button class="dropdown-toggle" data-bs-toggle="dropdown">USD <i
                                    class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                            <ul class="dropdown-menu">
                                <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                <li><a class="dropdown-item" href="#">EUR €</a></li>
                            </ul>
                        </div>
                        <!-- Currency End -->

                    </div>
                    <!-- Header Top call End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-right-inner d-flex justify-content-end">

                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{asset('public/frontend-assets') }}/images/icons/user_5.svg" class="svg_img top_svg" alt="" /><span
                                        class="ec-btn-title">Login</span></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header wishlist Start -->
                            <div class="ec-header-wishlist">
                                <a href="#">
                                    <div class="top-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                            class="svg_img top_svg" alt="" /></div>
                                    <span class="ec-btn-title">wishlist</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{asset('public/frontend-assets') }}/images/icons/user_5.svg" class="svg_img header_svg" alt="" /></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="register.html">Register</a></li>
                                    <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                    <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                </ul>
                            </div>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="#" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count ec-wishlist-count">0</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/cart_5.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count ec-cart-count">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="ecicon eci-bars"></i>
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
                        <div class="align-self-center ec-header-logo ">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-5.png" alt="Site Logo" /><img
                                        class="dark-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-5.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="#">
                                    <div class="ec-search-select-inner">
                                        <div class="ec-search-cat-title">All</div>
                                        <ul class="ec-search-cat-block">
                                            <li><a href="#">Cloths</a></li>
                                            <li><a href="#">Bag</a></li>
                                            <li><a href="#">Shoes</a></li>
                                        </ul>
                                    </div>
                                    <input class="form-control" placeholder="Search Here..." type="text">
                                    <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center ec-header-bottons">
                            <div class="ec-header-bottons">

                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/cart_5.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-btn-title"><span class="ec-cart-count">3</span> item(s) - $350.00</span>

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
                            <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-5.png" alt="Site Logo" /><img
                                    class="dark-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-5.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <div class="ec-search-select-inner">
                                    <div class="ec-search-cat-title">All</div>
                                    <ul class="ec-search-cat-block">
                                        <li><a href="#">Cloths</a></li>
                                        <li><a href="#">Bag</a></li>
                                        <li><a href="#">Shoes</a></li>
                                    </ul>
                                </div>
                                <input class="form-control" placeholder="Search Here..." type="text">
                                <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col ec-category-block">
                        <div class="ec-cat-menu">
                            <div class="ec-category-toggle">
                                <span class="ec-category-icon"></span>
                                <span class="ec-category-title">all categories</span>
                            </div>
                            <div class="ec-category-content">
                                <div id="ec-category-menu" class="ec-category-menu">
                                    <ul class="ec-category-wrapper">
                                        <li><a title="" class="ec-cat-menu-link" href="#">Home & Kitchen</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Electronics & Digital</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Home Accessories</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Electronics</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Office Furniture</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Hotel Furniture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ec-main-menu-block align-self-center d-none d-lg-block p-0">
                        <div class="ec-main-menu">
                            <ul>
                                <li class="dropdown"><a href="javascript:void(0)">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{url('/')}}">Fashion 1</a></li>
                                        <li><a href="demo-2.html">Fashion 2</a></li>
                                        <li><a href="demo-3.html">Furniture</a></li>
                                        <li><a href="demo-4.html">Mix products</a></li>
                                        <li><a href="demo-5.html">Electronic</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown position-static"><a href="javascript:void(0)">Categories</a>
                                    <ul class="mega-menu d-block">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Classic</a></li>
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
                                                <li class="menu_title"><a href="javascript:void(0)">Banner</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Full width 4 column</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">Columns</a></li>
                                                <li><a href="shop-full-width-col-3.html">3 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-4.html">4 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-5.html">5 Columns full width</a></li>
                                                <li><a href="shop-full-width-col-6.html">6 Columns full width</a></li>
                                                <li><a href="shop-banner-full-width-col-3.html">Banner 3 Columns</a>
                                                </li>
                                            </ul>
                                            <ul class="d-block">
                                                <li class="menu_title"><a href="javascript:void(0)">List</a>
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
                                            <a href="javascript:void(0)">Vendor account
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
                                            <a href="javascript:void(0)">User account
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
                                            <a href="javascript:void(0)">Vendor Catalog
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
                                        <li><a href="blog-left-sidebar.html">left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">full width</a></li>
                                        <li><a href="blog-detail-full-width.html">detail full width</a></li>
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
                            </ul>
                        </div>
                    </div>
                    <div class="col ec-spe-offer-block">
                        <div class="ec-spe-offer-link">
                            <a href="offer.html" class="ec-spe-offer-title">Special offer</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- Ekka Menu Start -->
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
                                <li><a href="demo-2.html">Fashion 2</a></li>
                                <li><a href="demo-3.html">Furniture</a></li>
                                <li><a href="demo-4.html">Mix products</a></li>
                                <li><a href="demo-5.html">Electronic</a></li>
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
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Social End -->
                </div>
            </div>
        </div>
        <!-- Ekka Menu End -->
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
                                src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Instant camera with two album</a>
                            <span class="cart-price"><span>$450</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Google nest wireless</a>
                            <span class="cart-price"><span>$360</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Earbuds 3nd generation wireless</a>
                            <span class="cart-price"><span>$30</span> x 1</span>
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
                                <td class="text-right">$1350.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">VAT (20%) :</td>
                                <td class="text-right">$270.00</td>
                            </tr>
                            <tr>
                                <td class="text-left">Total :</td>
                                <td class="text-right primary-color">$1620.00</td>
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
    <div class="ec-main-slider section ">
        <div class="ec-slider">
            <div class="ec-slide-item d-flex slide-1">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">new arrival</h2>
                                <h1 class="ec-slide-title">stylish headphone</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Trending Item</h2>
                                <h1 class="ec-slide-title">Motion Camera</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">new arrival</h2>
                                <h1 class="ec-slide-title">google nest</h1>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                    Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Slider End -->

    <!--  category Section Start -->
    <section class="section ec-category-section section-space-mb">
        <div class="container">
            <div class="row">
                <div class="ec_cat_slider">
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <h2 class="d-none">Category</h2>
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/8.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Laptops & PC</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/9.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Smartwatches</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/10.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/11.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Console Games</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/12.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Headphones</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/13.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Virtual Reality</span>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <a href="#">
                                <div class="ec-cat-image">
                                    <img src="{{asset('public/frontend-assets') }}/images/category-image/14.svg" class="svg_img cat_svg" alt="" />
                                </div>
                                <div class="ec-cat-desc">
                                    <span class="ec-section-title">Cameras</span>
                                </div>
                            </a>
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
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Featured Products</h2>
                        <h6 class="ec-sub-title">Lorem Ipsum is simply dummy text of the printing</h6>

                    </div>
                </div>

            </div>
            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/39_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/39_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ef7ca3;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Instant camera with two album</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Camera</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$159.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/40_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#dddddd;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/40_2.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/40_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#818181;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest wireless</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia Speakers</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$180.00</span>
                                                    <span class="old-price">$199.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/41_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#dfdfdf;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/41_2.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/41_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#5a6777;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Earbuds 3nd generation wireless</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Accessories</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$159.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/42_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/42_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/42_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/42_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#eeeeee;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple iPhone 13 128 GB, Starlight</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Phone</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$1590.00</span>
                                                    <span class="old-price">$2000.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/43_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#cccccc;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/43_2.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/43_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#9fbfff;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sharp Air Purifier for Homes</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Accessories</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/44_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#ffdf76;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/44_2.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/44_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#568eff;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless blutooth headphone</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Headphone</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$65.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/45_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/45_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/45_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/45_2.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#202020;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Laptop i7 processor 1TB, 6GB</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Laptop</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$1900.00</span>
                                                    <span class="old-price">$2100.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/product-image/46_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <div class="ec-pro-option">
                                            <div class="ec-pro-opt-inner">
                                                <div class="ec-pro-color">
                                                    <ul class="ec-opt-swatch ec-change-img">
                                                        <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                                data-tooltip="Gray"><span
                                                                    style="background-color:#202020;"></span></a></li>
                                                        <li><a href="#" class="ec-opt-clr-img"
                                                                data-src="{{asset('public/frontend-assets') }}/images/product-image/46_2.jpg"
                                                                data-src-hover="{{asset('public/frontend-assets') }}/images/product-image/46_2.jpg"
                                                                data-tooltip="Orange"><span
                                                                    style="background-color:#033eb4;"></span></a></li>
                                                    </ul>
                                                </div>
                                                <div class="ec-pro-compare">
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch light</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Lighting</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$45.00</span>
                                                    <span class="old-price">$60.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                    <i class="ecicon eci-star-o"></i>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="pro-hidden-block">

                                            <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                    Cart</button>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
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
    </section>
    <!-- ec Product tab Area End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="container">
            <div class="row m-tb-minus-15">
                <div class="ec-banners">
                    <div class="ec-banner-left col-sm-6">
                        <div class="ec-banner-block ec-banner-block-1 col-sm-12">
                            <div class="banner-block">
                                <img src="{{asset('public/frontend-assets') }}/images/banner/23.png" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">lenovo tablets</span>
                                    <span class="ec-banner-title">UP to 70% OFF</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-right col-sm-6">
                        <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                            <div class="banner-block">
                                <img src="{{asset('public/frontend-assets') }}/images/banner/24.png" alt="" />
                                <div class="banner-content">
                                    <span class="ec-banner-stitle">Xiaoyi YI 1080p</span>
                                    <span class="ec-banner-title">WiFi IP Camera 36</span>
                                    <span class="ec-banner-btn"><a href="#" class="btn-primary">Shop Now</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Feature & Special Section Start -->
    <section class="section ec-exe-spe-section section-space-ptb-100 section-space-mt section-space-mb-100"
        style="background-image: url('assets/images/special-product/background.jpg');">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-6 col-md-12 col-sm-12 margin-b-30">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Deals of the days</h2>
                        </div>
                    </div>

                    <div class="ec-spe-products">
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner ec-product-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{asset('public/frontend-assets') }}/images/special-product/1_1.jpg" alt="Product" /></a>
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung gaming console s8</a></h5>
                                    <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Gaming</a></h6>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="new-price">$159.00</span>
                                            <span class="old-price">$200.00</span>
                                        </span>
                                    </div>
                                    <div class="ec-fs-pro-progress">
                                        <span class="ec-fs-pro-progress-desc"><span>Solid:
                                                <b>0</b></span><span>Available: <b>350</b></span></span>
                                        <span class="ec-fs-pro-progressbar"></span>
                                    </div>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc"> Hurry up ! offers ends in:</span>
                                        <span id="ec-fs-count-1"></span>
                                    </div>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-fs-product">
                            <div class="ec-fs-pro-inner ec-product-inner">
                                <div class="ec-fs-pro-image-outer col-lg-6 col-md-6 col-sm-6">
                                    <div class="ec-fs-pro-image">
                                        <a href="product-left-sidebar.html" class="image"><img class="main-image"
                                                src="{{asset('public/frontend-assets') }}/images/special-product/2_1.jpg" alt="Product" /></a>
                                    </div>
                                </div>
                                <div class="ec-pro-content col-lg-6 col-md-6 col-sm-6">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless Earphone with Mic neckband </a></h5>
                                    <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia</a></h6>
                                    <div class="ec-pro-rat-price">
                                        <span class="ec-price">
                                            <span class="new-price">$480.00</span>
                                            <span class="old-price">$700.00</span>
                                        </span>
                                    </div>
                                    <div class="ec-fs-pro-progress">
                                        <span class="ec-fs-pro-progress-desc"><span>Solid:
                                                <b>0</b></span><span>Available: <b>200</b></span></span>
                                        <span class="ec-fs-pro-progressbar"></span>
                                    </div>
                                    <div class="countdowntimer">
                                        <span class="ec-fs-count-desc"> Hurry up ! offers ends in:</span>
                                        <span id="ec-fs-count-2"></span>
                                    </div>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                            Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Special Section End -->
                <!--  Feature Section Start -->
                <div class="ec-exe-section col-lg-6 col-md-12 col-sm-12">
                    <div class="col-md-12 text-left">
                        <div class="section-title mb-6">
                            <h2 class="ec-title">Exclusive Products</h2>
                        </div>
                    </div>

                    <div class="ec-exe-products product-mt-minus-15">
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-product-hover"></div>
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/special-product/3_1.jpg"
                                                alt="Product" />
                                            <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/special-product/3_2.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <div class="ec-pro-option">
                                        <div class="ec-pro-opt-inner">
                                            <div class="ec-pro-color">
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{asset('public/frontend-assets') }}/images/special-product/3_1.jpg"
                                                            data-src-hover="{{asset('public/frontend-assets') }}/images/special-product/3_1.jpg"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#dbdbdb;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{asset('public/frontend-assets') }}/images/special-product/3_2.jpg"
                                                            data-src-hover="{{asset('public/frontend-assets') }}/images/special-product/3_2.jpg"
                                                            data-tooltip="Orange"><span
                                                                style="background-color:#76e7e7;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-compare">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">JBLK wireless speaker</a></h5>
                                    <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia</a></h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$230.00</span>
                                                <span class="old-price">$360.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star-o"></i>
                                                <i class="ecicon eci-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-hidden-block">

                                        <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing. </div>
                                        <div class="ec-pro-actions">
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                            <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                Cart</button>
                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-product-hover"></div>
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/special-product/4_1.jpg"
                                                alt="Product" />
                                            <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/special-product/4_2.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <div class="ec-pro-option">
                                        <div class="ec-pro-opt-inner">
                                            <div class="ec-pro-color">
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{asset('public/frontend-assets') }}/images/special-product/4_1.jpg"
                                                            data-src-hover="{{asset('public/frontend-assets') }}/images/special-product/4_2.jpg"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#202020;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-compare">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Galacy 8 phone 4gb | 64gb </a></h5>
                                    <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Phone</a></h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$159.00</span>
                                                <span class="old-price">$200.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star-o"></i>
                                                <i class="ecicon eci-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-hidden-block">

                                        <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                        <div class="ec-pro-actions">
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                            <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                Cart</button>
                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-product-content">
                            <div class="ec-product-inner">
                                <div class="ec-product-hover"></div>
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/special-product/6_1.jpg"
                                                alt="Product" />
                                            <img class="hover-image" src="{{asset('public/frontend-assets') }}/images/special-product/6_2.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <div class="ec-pro-option">
                                        <div class="ec-pro-opt-inner">
                                            <div class="ec-pro-color">
                                                <ul class="ec-opt-swatch ec-change-img">
                                                    <li class="active"><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{asset('public/frontend-assets') }}/images/special-product/6_1.jpg"
                                                            data-src-hover="{{asset('public/frontend-assets') }}/images/special-product/6_1.jpg"
                                                            data-tooltip="Gray"><span
                                                                style="background-color:#dfdfdf;"></span></a></li>
                                                    <li><a href="#" class="ec-opt-clr-img"
                                                            data-src="{{asset('public/frontend-assets') }}/images/special-product/6_2.jpg"
                                                            data-src-hover="{{asset('public/frontend-assets') }}/images/special-product/6_2.jpg"
                                                            data-tooltip="Orange"><span
                                                                style="background-color:#91b6ff;"></span></a></li>
                                                </ul>
                                            </div>
                                            <div class="ec-pro-compare">
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{asset('public/frontend-assets') }}/images/icons/compare_5.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Ultra sound smart speaker</a></h5>
                                    <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia</a></h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$768.00</span>
                                                <span class="old-price">$845.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star-o"></i>
                                                <i class="ecicon eci-star-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="pro-hidden-block">

                                        <div class="ec-pro-desc">Lorem Ipsum is simply dummy text of the printing.</div>
                                        <div class="ec-pro-actions">
                                            <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                            <button title="Add To Cart" class="add-to-cart btn btn-primary">Add To
                                                Cart</button>
                                            <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                title="Quick view" data-bs-toggle="modal"
                                                data-bs-target="#ec_quickview_modal"><img
                                                    src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                    alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Feature Section End -->

            </div>
        </div>
    </section>
    <!-- Feature & Special Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="ec-offer-inner ofr-img">
                <!-- <img src="{{asset('public/frontend-assets') }}/images/offer-image/offer_bg.png" alt="" class="offer_bg" /> -->
                <div class="col-sm-6 ec-offer-content">
                    <div class="ec-offer-content-inner">
                        <h2 class="ec-offer-stitle">black friday</h2>
                        <h2 class="ec-offer-title">up to 60 % off</h2>
                        <span class="ec-offer-desc">Select accessories for your favourites gadgets</span>
                        <span class="ec-offer-btn"><a href="#" class="btn btn-primary">Shop Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- All Product Start -->
    <section class="section ec-all-products section-space-p">
        <h2 class="d-none">all product</h2>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-new-product-content margin-b-30">
                    <div class="col-md-12 text-left">
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                    <h6 class="ec-pro-stitle">Camera</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$589.00</span>
                                                <span class="old-price">$658.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                    <h6 class="ec-pro-stitle">Multimedia</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$256.00</span>
                                                <span class="old-price">$298.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                    <h6 class="ec-pro-stitle">accessories</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$56.00</span>
                                                <span class="old-price">$78.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/42_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                    <h6 class="ec-pro-stitle">Phone</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$2580.00</span>
                                                <span class="old-price">$3650.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$385.00</span>
                                                <span class="old-price">$456.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                    <h6 class="ec-pro-stitle">Music</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$159.00</span>
                                                <span class="old-price">$200.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/45_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                    <h6 class="ec-pro-stitle">Laptop</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$1520.00</span>
                                                <span class="old-price">$1752.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$20.00</span>
                                                <span class="old-price">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-special-product-content margin-b-30">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-title">Special offer</h2>
                        </div>
                    </div>
                    <div class="ec-special-slider">
                        <div class="col-sm-12 ec-all-product-block">
                            <div class="ec-all-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/42_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                    <h6 class="ec-pro-stitle">Phone</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$2580.00</span>
                                                <span class="old-price">$3650.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$385.00</span>
                                                <span class="old-price">$456.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                    <h6 class="ec-pro-stitle">Music</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$159.00</span>
                                                <span class="old-price">$200.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/45_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                    <h6 class="ec-pro-stitle">Laptop</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$1520.00</span>
                                                <span class="old-price">$1752.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                    <h6 class="ec-pro-stitle">accessories</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$56.00</span>
                                                <span class="old-price">$78.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                    <h6 class="ec-pro-stitle">Camera</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$589.00</span>
                                                <span class="old-price">$658.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                    <h6 class="ec-pro-stitle">Multimedia</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$256.00</span>
                                                <span class="old-price">$298.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$20.00</span>
                                                <span class="old-price">$30.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-all-product-content ec-best-product-content">
                    <div class="col-md-12 text-left">
                        <div class="section-title">
                            <h2 class="ec-title">Best Sellers</h2>
                        </div>
                    </div>
                    <div class="ec-best-slider">
                        <div class="col-sm-12 ec-all-product-block">
                            <div class="ec-all-product-inner">
                                <div class="ec-pro-image-outer">
                                    <div class="ec-pro-image">
                                        <a href="product-left-sidebar.html" class="image">
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/44_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless headphone</a></h5>
                                    <h6 class="ec-pro-stitle">Music</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$159.00</span>
                                                <span class="old-price">$200.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/45_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Samsung laptop</a></h5>
                                    <h6 class="ec-pro-stitle">Laptop</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$1520.00</span>
                                                <span class="old-price">$1752.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/42_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">iPhone 13 max</a></h5>
                                    <h6 class="ec-pro-stitle">Phone</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$2580.00</span>
                                                <span class="old-price">$3650.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/43_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Room Purifier</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$385.00</span>
                                                <span class="old-price">$456.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest speaker</a></h5>
                                    <h6 class="ec-pro-stitle">Multimedia</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$256.00</span>
                                                <span class="old-price">$298.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless airpods</a></h5>
                                    <h6 class="ec-pro-stitle">accessories</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$56.00</span>
                                                <span class="old-price">$78.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/46_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch</a></h5>
                                    <h6 class="ec-pro-stitle">Electronics</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$20.00</span>
                                                <span class="old-price">$30.00</span>
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
                                            <img class="main-image" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg"
                                                alt="Product" />
                                        </a>
                                    </div>
                                </div>
                                <div class="ec-pro-content">
                                    <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Camera instant image</a></h5>
                                    <h6 class="ec-pro-stitle">Camera</h6>
                                    <div class="ec-pro-rat-price">
                                        <div class="ec-pro-rat-pri-inner">
                                            <span class="ec-price">
                                                <span class="new-price">$589.00</span>
                                                <span class="old-price">$658.00</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-6 ec-right-banner-content dis-n-767">
                    <div class="ec-right-banner-inner">
                        <div class="right-banner-block">
                            <img class="right-banner-img" src="{{asset('public/frontend-assets') }}/images/banner/22.png" alt="Banner" />
                            <div class="right-banner-content">
                                <span class="ec-right-banner-title">mi 8 lite</span>
                                <span class="ec-right-banner-stitle">selfies and style</span>
                                <span class="ec-right-banner-btn"><a href="#" class="btn-primary">Add to cart</a></span>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Item end -->

    <!-- ec testimonial Start -->
    <section class="section ec-test-section section-space-ptb-100 section-space-mt section-space-mb"
        style="background-image: url('assets/images/testimonial/testimonial_bg.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Client Testimonials</h2>
                        <h6 class="ec-sub-title">Lorem Ipsum is simply dummy text of the printing</h6>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-test-outer">
                    <ul id="ec-testimonial-slider">
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/1.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">david james</div>
                                    <div class="ec-test-designation">united states of america</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry</div>

                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/2.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">david james</div>
                                    <div class="ec-test-designation">united states of america</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry</div>

                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/3.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">david james</div>
                                    <div class="ec-test-designation">united states of america</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry</div>

                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/1.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-name">david james</div>
                                    <div class="ec-test-designation">united states of america</div>
                                    <div class="ec-test-rating">
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                        <i class="ecicon eci-star fill"></i>
                                    </div>
                                    <div class="ec-test-desc">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry</div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ec testimonial end -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul id="ec-brand-slider">
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/1.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/2.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/3.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/4.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/5.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/6.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/7.png" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="insta-auto">
                    <h2 class="d-none">Instagram</h2>
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
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/5.jpg" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!--  services Section Start -->
    <section class="section ec-services-section">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_5_1.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free shipping</h2>
                            <p>Free shipping on all US orders</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_2.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>money gaurntee</h2>
                            <p>30 days money back guarantee</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_3.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>online support</h2>
                            <p>We support online 24/7 on day</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_4 col-sm-12 col-md-3">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_5_4.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Member Discount</h2>
                            <p>Onevery order over $120.00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-4 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img src="{{asset('public/frontend-assets') }}/images/logo/footer-logo-5.png"
                                            alt=""><img class="dark-footer-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-5.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                <h4 class="ec-footer-heading">Ask Me questions</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">
                                            <span class="call-img"><img src="{{asset('public/frontend-assets') }}/images/icons/call_5.svg"
                                                    class="svg_img foo_img" alt="" /></span>
                                            <span class="call-desc">
                                                <span>Got questions? Call us 24/7!</span>
                                                <span><a href="tel:+80080018588">(800) 8001-8588</a>, <a href="tel:+0600874548">(0600) 874 548</a></span>
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ec-footer-widget ec-footer-social">
                                <h4 class="ec-footer-heading">Follow Us</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i
                                                    class="ecicon eci-instagram"></i></a></li>
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a>
                                        </li>
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
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery Information</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy </a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms & conditions</a></li>
                                        <li class="ec-footer-link"><a href="{{url('/contact')}}">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Customer Service</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Site Map</a></li>
                                        <li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="#">Brands</a></li>
                                        <li class="ec-footer-link"><a href="offer.html">Gift Certificates</a></li>
                                        <li class="ec-footer-link"><a href="#">Affiliate</a></li>
                                        <li class="ec-footer-link"><a href="offer.html">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Sign up for our e-mail to get latest news.</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email" name="ec-email" value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value="">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-footer-widget ec-share">
                                <ul>
                                    <li class="ec-share-link"><a href="#"><img src="{{asset('public/frontend-assets') }}/images/icons/iphone.png"
                                                alt="" /></a></li>
                                    <li class="ec-share-link"><a href="#"><img src="{{asset('public/frontend-assets') }}/images/icons/google.png"
                                                alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer Copyright Start -->
                        <div class="col footer-copy">
                            <div class="footer-bottom-copy ">
                                <div class="ec-copy">© 2021 <a class="site-name" href="#">Ekka</a>. All Rights Reserved
                                </div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="{{asset('public/frontend-assets') }}/images/icons/payment.png" alt="">
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
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/39_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/40_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/39_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/39_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/40_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/40_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/41_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Trainers with broguing slogan</a></h5>
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
                                    <span class="old-price">$200.00</span>
                                    <span class="new-price">$159.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span style="background-color:#202020;"></span></li>
                                                <li><span style="background-color:#0d4fcf;"></span></li>
                                                <li><span style="background-color:#f93434;"></span></li>
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

    <!-- Click To ChatPro -->
    <div class="ec-cp-style cp-right-bottom">
        <!-- Start Floating Panel Container -->
        <div class="cp-panel">
            <!-- Chat Button For Facebook Messenger -->
            <a class="cp-list" href="http://m.me/Loopinfosol" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-messenger.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>FB Messenger</h2>
                    <p>get connected with Facebook</p>
                </div>
            </a>
            <!-- Chat Button For Whatsapp -->
            <a id="cp-whatsapp" href="#" class="cp-list" data-number="919099153528" data-message="Please help me! I have got wrong product from your website." target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-whatsapp.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Whatsapp</h2>
                    <p>directlly chat on Whatsapp</p>
                </div>
            </a>
            <!-- Chat Button For Instagram -->
            <a class="cp-list" href="https://www.instagram.com/_k_e_t_a_n_/" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-instagram.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Instagram</h2>
                    <p>discuss over Instagram</p>
                </div>
            </a>
            <!-- Chat Button For LinkedIn -->
            <a class="cp-list" href="https://www.linkedin.com/messaging/thread/6599949383096205313/" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-linkedin.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>LinkedIn</h2>
                    <p>discuss over LinkedIn</p>
                </div>
            </a>
            <!-- Chat Button For Twitter -->
            <a class="cp-list" href="https://twitter.com/messages/1899733261-2826370326/" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-twitter.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Twitter</h2>
                    <p>easily chat over Twitter</p>
                </div>
            </a>
            <!-- Chat Button For Skype -->
            <a class="cp-list" href="skype:kathiriyaketan57?chat" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-skype.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Skype</h2>
                    <p>chat on Skype</p>
                </div>
            </a>
            <!-- Chat Button For Telegram -->
            <a class="cp-list" href="https://t.me/kathiriyaketan" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-telegram.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Telegram</h2>
                    <p> get solution over Telegram</p>
                </div>
            </a>
            <!-- Chat Button For Viber -->
            <a class="cp-list" href="viber://chat?number=+919099153528" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-viber.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Viber</h2>
                    <p> instant solution over Viber</p>
                </div>
            </a>
            <!-- Mail Button For Email -->
            <a class="cp-list" href="mailto:kathiriyaketan57@gmail.com" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-email.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Email</h2>
                    <p> talk with us over Email</p>
                </div>
            </a>
            <!-- Call Button For Phone Number -->
            <a class="cp-list" href="tel:+919099153528" target="_blank">
                <div class="cp-image">
                    <img src="{{asset('public/frontend-assets') }}/images/chat-pro/cp-telephone.png" alt=""/>
                </div>
                <div class="cp-content">
                    <h2>Call</h2>
                    <p> talk with us over telephone</p>
                </div>
            </a>
        </div>
        <!--/ End Floating Panel Container -->
        <!-- Start Right Floating Button -->
        <div class="cp-button cp-right-bottom">
            <img src="{{asset('public/frontend-assets') }}/images/chat-pro/chat.png" alt="icon"/>
        </div>
        <!--/ End Right Floating Button -->
    </div>
    <!-- Click To ChatPro end-->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box" class="animate__animated animate__slideInDown">
        <div id="ec-popnews-close"><i class="ecicon eci-close"></i></div>
        <div id="ec-popnews-box-content">
            <h1>Subscribe Newsletter</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <form id="ec-popnews-form" action="#" method="post">
                <input type="email" name="newsemail" placeholder="Email Address" required />
                <button type="button" class="btn btn-secondary" name="subscribe">Subscribe</button>
            </form>
        </div>
    </div>
    <!-- Newsletter Modal end -->

    <!-- successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!--successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/popper.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{asset('public/frontend-assets') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/countdownTimer.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/scrollup.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/slick.min.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/infiniteslidev2.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/plugins/chat-pro.js"></script>

    <!-- Main Js -->
    <script src="{{asset('public/frontend-assets') }}/js/vendor/index.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/demo-5.js"></script>

</body>

</html>
