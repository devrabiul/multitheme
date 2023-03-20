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
    <link rel="icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-3.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{asset('public/frontend-assets') }}/images/favicon/favicon-3.png" />
    <meta name="msapplication-TileImage" content="{{asset('public/frontend-assets') }}/images/favicon/favicon-3.png" />

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
    <link rel="stylesheet" href="{{asset('public/frontend-assets') }}/css/demo3.css" />

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
                        <div class="header-top-call">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/top-call.svg" class="svg_img top_svg" alt="" /> Phone:
                            <a href="tel:+48735527287"> +48 735 52 728 7</a>
                        </div>
                    </div>
                    <!-- Header Top phone End -->
                    <!-- Header Top call Start -->
                    <div class="col header-top-center">
                        <div class="header-top-call">
                            Order online or call us (+1800) 000 8808
                        </div>
                    </div>
                    <!-- Header Top call End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-right-inner d-flex justify-content-end">
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
                            <!-- Language Start -->
                            <div class="header-top-lan-curr header-top-lan dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">ENG <i
                                        class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">Italiano</a></li>
                                </ul>
                            </div>
                            <!-- Language End -->
                            <!-- Social Start -->
                            <div class="header-top-social">
                                <ul class="mb-0">
                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Social End -->
                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <div class="ec-header-user dropdown">
                                <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                        src="{{asset('public/frontend-assets') }}/images/icons/user.svg" class="svg_img header_svg"
                                        alt="" /></button>
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
                                <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count ec-cart-count">3</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle ec-d-l d-lg-none">
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
                    <div class="header-bottom-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center ec-header-logo ">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-3.png"
                                        alt="Site Logo" /><img class="dark-logo"
                                        src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-3.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="#">
                                    <div class="ec-search-select-inner">
                                        <select name="ec-search-cat">
                                            <option selected disabled>All</option>
                                            <option value="cloths">Cloths</option>
                                            <option value="bag">Bag</option>
                                            <option value="shoes">Shoes</option>
                                        </select>
                                    </div>
                                    <input class="form-control" placeholder="I’m searching for..." type="text">
                                    <button class="search_submit" type="submit">Search <img
                                            src="{{asset('public/frontend-assets') }}/images/icons/search.svg" class="svg_img search_svg"
                                            alt="" /></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center ec-header-cart">
                            <div class="ec-header-bottons">
                                <!-- Header User Start -->
                                <div class="ec-header-user dropdown">
                                    <button class="dropdown-toggle" data-bs-toggle="dropdown"><img
                                            src="{{asset('public/frontend-assets') }}/images/icons/user.svg" class="svg_img header_svg"
                                            alt="" /><span class="ec-btn-title">Account</span></button>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a class="dropdown-item" href="register.html">Register</a></li>
                                        <li><a class="dropdown-item" href="checkout.html">Checkout</a></li>
                                        <li><a class="dropdown-item" href="{{url('/customer/login')}}">Login</a></li>
                                    </ul>
                                </div>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="#" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div><span
                                        class="ec-header-count ec-cart-wishlist">0</span>
                                    <span class="ec-btn-title">wishlist</span>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <span class="ec-header-count ec-cart-count">3</span><span class="ec-btn-title">In
                                        Cart</span>
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
                            <a href="{{url('/')}}"><img src="{{asset('public/frontend-assets') }}/images/logo/logo-3.png" alt="Site Logo" /><img
                                    class="dark-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-3.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <div class="ec-search-select-inner">
                                    <select name="ec-search-cat">
                                        <option selected disabled>All</option>
                                        <option value="cloths">Cloths</option>
                                        <option value="bag">Bag</option>
                                        <option value="shoes">Shoes</option>
                                    </select>
                                </div>
                                <input class="form-control" placeholder="I’m searching for..." type="text">
                                <button class="search_submit" type="submit"><img
                                        src="{{asset('public/frontend-assets') }}/images/icons/search.svg" class="svg_img search_svg"
                                        alt="" /></button>
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
                    <div class="col-sm-2 ec-category-block">
                        <div class="ec-category-menu">
                            <div class="ec-category-toggle"><span class="ec-category-title">Categories</span><i
                                    class="ecicon eci-angle-down" aria-hidden="true"></i>
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
                    <div class="col-sm-10 ec-main-menu-block align-self-center d-none d-lg-block">
                        <div class="ec-main-menu">
                            <ul>
                                <li><a href="javascript:void(0)">Home</a></li>
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
                                                <li class="menu_title"><a href="javascript:void(0)">Banner
                                                        Variation</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-3.html">Left sidebar 3
                                                        column</a></li>
                                                <li><a href="shop-banner-left-sidebar-col-4.html">Left sidebar 4
                                                        column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-3.html">Right sidebar
                                                        3 column</a></li>
                                                <li><a href="shop-banner-right-sidebar-col-4.html">Right sidebar
                                                        4 column</a></li>
                                                <li><a href="shop-banner-full-width.html">Full width 4 column</a>
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
                                                            class="img-responsive"
                                                            src="{{asset('public/frontend-assets') }}/images/menu-banner/9.jpg" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-left-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{asset('public/frontend-assets') }}/images/menu-banner/10.jpg" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-3.html"><img
                                                            class="img-responsive"
                                                            src="{{asset('public/frontend-assets') }}/images/menu-banner/11.jpg" alt=""></a>
                                                </li>
                                                <li><a class="p-0" href="shop-right-sidebar-col-4.html"><img
                                                            class="img-responsive"
                                                            src="{{asset('public/frontend-assets') }}/images/menu-banner/12.jpg" alt=""></a>
                                                </li>
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
                                    <ul class="sub-menu ec-right-0">
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
                                                <li><a href="catalog-single-vendor.html">Single Vendor</a></li>
                                                <li><a href="catalog-multi-vendor.html">Multi Vendor</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu ec-right-0">
                                        <li><a href="blog-left-sidebar.html">Left sidebar</a></li>
                                        <li><a href="blog-right-sidebar.html">Right sidebar</a></li>
                                        <li><a href="blog-detail-left-sidebar.html">Detail left sidebar</a></li>
                                        <li><a href="blog-detail-right-sidebar.html">Detail right sidebar</a></li>
                                        <li><a href="blog-full-width.html">Full width</a></li>
                                        <li><a href="blog-detail-full-width.html">Detail full width</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Elements</a>
                                    <ul class="sub-menu ec-right-0">
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
        <!-- Ekka Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li><a href="javascript:void(0)">Home</a></li>

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
                                src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Single Sofa Chair</a>
                            <span class="cart-price"><span>$450</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Jabra Night lamp</a>
                            <span class="cart-price"><span>$450</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Kambrook classic Chairs</a>
                            <span class="cart-price"><span>$450</span> x 1</span>
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
    <div class="ec-main-slider section section-space-mb">
        <div class="ec-slider">
            <div class="ec-slide-item d-flex slide-1">
                <img src="{{asset('public/frontend-assets') }}/images/main-slider-banner/arrow-7.png" class="main_banner_arrow_img" alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Stylish & comfort</h2>
                                <h1 class="ec-slide-title">Living Sofas</h1>
                                <p>Introducing Apple Watch Series 4. Fundamentally redesigned and re-engineered to help
                                    you stay even more active, healthy, and connected.</p>
                                <span class="ec-slide-disc">Starting @<span>$150</span></span>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-2">
                <img src="{{asset('public/frontend-assets') }}/images/main-slider-banner/arrow-8.png" class="main_banner_arrow_img" alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Stylish & comfort</h2>
                                <h1 class="ec-slide-title">Living Couch</h1>
                                <p>Introducing Apple Watch Series 4. Fundamentally redesigned and re-engineered to help
                                    you stay even more active, healthy, and connected.</p>
                                <span class="ec-slide-disc">Starting @<span>$150</span></span>
                                <a href="#" class="btn btn-lg btn-secondary">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-slide-item d-flex slide-3">
                <img src="{{asset('public/frontend-assets') }}/images/main-slider-banner/arrow-9.png" class="main_banner_arrow_img" alt="" />
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="ec-slide-content slider-animation">
                                <h2 class="ec-slide-stitle">Stylish & comfort</h2>
                                <h1 class="ec-slide-title">Garden Chair</h1>
                                <p>Introducing Apple Watch Series 4. Fundamentally redesigned and re-engineered to help
                                    you stay even more active, healthy, and connected.</p>
                                <span class="ec-slide-disc">Starting @<span>$150</span></span>
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
    <section class="section ec-category-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Browse By Categories</h2>
                        <p class="sub-title">Check out our feature products.</p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn"><a class="btn-primary" href="shop-left-sidebar-col-3.html">View All Categories</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec_cat_slider">
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <div class="ec-cat-image">
                                <img src="{{asset('public/frontend-assets') }}/images/category-image/1.jpg" alt="" />
                            </div>
                            <div class="ec-cat-desc">
                                <span class="ec-section-btn"><a href="shop-left-sidebar-col-3.html" class="btn-primary">Sofa chair</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <div class="ec-cat-image">
                                <img src="{{asset('public/frontend-assets') }}/images/category-image/2.jpg" alt="" />
                            </div>
                            <div class="ec-cat-desc">
                                <span class="ec-section-btn"><a href="shop-left-sidebar-col-3.html" class="btn-primary">Wooden Tables</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <div class="ec-cat-image">
                                <img src="{{asset('public/frontend-assets') }}/images/category-image/3.jpg" alt="" />
                            </div>
                            <div class="ec-cat-desc">
                                <span class="ec-section-btn"><a href="shop-left-sidebar-col-3.html" class="btn-primary">Wooden beds</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <div class="ec-cat-image">
                                <img src="{{asset('public/frontend-assets') }}/images/category-image/4.jpg" alt="" />
                            </div>
                            <div class="ec-cat-desc">
                                <span class="ec-section-btn"><a href="shop-left-sidebar-col-3.html" class="btn-primary">lighting</a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec_cat_content">
                        <div class="ec_cat_inner">
                            <div class="ec-cat-image">
                                <img src="{{asset('public/frontend-assets') }}/images/category-image/5.jpg" alt="" />
                            </div>
                            <div class="ec-cat-desc">
                                <span class="ec-section-btn"><a href="shop-left-sidebar-col-3.html" class="btn-primary">Sofa chair</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!-- ec Banner Section Start -->
    <section class="ec-banner section section-space-p">
        <h2 class="d-none">Banner</h2>
        <div class="ec-banners">
            <div class="ec-banner-left col-sm-6">
                <div class="ec-banner-block ec-banner-block-1 col-sm-12">
                    <div class="banner-block">
                        <img src="{{asset('public/frontend-assets') }}/images/banner/15.jpg" alt="" />
                        <div class="banner-content">
                            <div class="banner-text">
                                <span class="ec-banner-stitle">20% Off ! Limited week deal</span>
                                <span class="ec-banner-title">for Interior Designs</span>
                                <p>Lorem ipsum, or lipsum as it is sometimes<br> known, is dummy since 1991.</p>
                            </div>
                            <span class="ec-banner-btn"><a href="#" class="btn-primary">Discover Now</a></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ec-banner-right col-sm-6">
                <div class="ec-banner-block ec-banner-block-2 col-sm-12">
                    <div class="banner-block">
                        <img src="{{asset('public/frontend-assets') }}/images/banner/16.jpg" alt="" />
                        <div class="banner-content">
                            <div class="banner-text">
                                <span class="ec-banner-stitle">Rezer’s</span>
                                <span class="ec-banner-title">Classic<br> Interior Designs</span>
                            </div>
                            <span class="ec-banner-btn"><a href="#" class="btn-primary">Discover Now</a></span>
                        </div>
                    </div>
                </div>
                <div class="ec-banner-block ec-banner-block-3 col-sm-6">
                    <div class="banner-block">
                        <a href="#">
                            <img src="{{asset('public/frontend-assets') }}/images/banner/17.jpg" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">Exlusive</span>
                                    <span class="ec-banner-title">Living sofa</span>
                                    <span class="ec-banner-desc">For Sale only <span>$500.00</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="ec-banner-block ec-banner-block-4 col-sm-6">
                    <div class="banner-block">
                        <a href="#">
                            <img src="{{asset('public/frontend-assets') }}/images/banner/18.jpg" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-stitle">Best 2021 Gear</span>
                                    <span class="ec-banner-title">Mini table</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Exclusive Products</h2>
                        <p class="sub-title">Check out our exclusive products.</p>
                    </div>
                    <div class="section-btn">
                        <ul class="ec-pro-tab-nav nav">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                    href="#tab-pro-new-arrivals">New Arrivals</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-pro-special-offer">Special Offer</a></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                    href="#tab-pro-best-sellers">Best Sellers</a></li>
                        </ul>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single sofa seat for living</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED Night lamp showpiece</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Revolving chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern table for living room</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Dining table with chair</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern office char</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$890</span>
                                                    <span class="new-price">$750</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern tabel for living room</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$530</span>
                                                    <span class="new-price">$399</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single wooden sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Woolen fabric single sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1900</span>
                                                    <span class="new-price">$1550</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wooden bed with mattress</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$4500</span>
                                                    <span class="new-price">$3700</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern LED night lamp</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$680</span>
                                                    <span class="new-price">$550</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern tabel for living room</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$530</span>
                                                    <span class="new-price">$399</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single wooden sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Woolen fabric single sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1900</span>
                                                    <span class="new-price">$1550</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wooden bed with mattress</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$4500</span>
                                                    <span class="new-price">$3700</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single sofa seat for living</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED Night lamp showpiece</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Revolving chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern table for living room</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Dining table with chair</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern office char</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$890</span>
                                                    <span class="new-price">$750</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern LED night lamp</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$680</span>
                                                    <span class="new-price">$550</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">
                                <div class="ec-pro-tab-slider">
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/23_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-15%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Dining table with chair</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$3950</span>
                                                    <span class="new-price">$3500</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wooden bed with mattress</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$4500</span>
                                                    <span class="new-price">$3700</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/19_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single sofa seat for living</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1549</span>
                                                    <span class="new-price">$1400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/24_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern office char</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$890</span>
                                                    <span class="new-price">$750</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Woolen fabric single sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$1900</span>
                                                    <span class="new-price">$1550</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern LED night lamp</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$230</span>
                                                    <span class="new-price">$180</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-35%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern tabel for living room</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$530</span>
                                                    <span class="new-price">$399</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="percentage">-25%</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single wooden sofa</a></h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED Night lamp showpiece</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$120</span>
                                                    <span class="new-price">$80</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="sale">Top Seller</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Revolving chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$999</span>
                                                    <span class="new-price">$799</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern table for living room</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$450</span>
                                                    <span class="new-price">$400</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="product-left-sidebar.html" class="image">
                                                        <img class="main-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                                            alt="Product" />
                                                        <img class="hover-image"
                                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                                            alt="Product" />
                                                    </a>
                                                    <span class="flags">
                                                        <span class="stock">Out of stock</span>
                                                    </span>
                                                    <div class="ec-pro-actions">
                                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                                class="svg_img pro_svg" alt="" /></button>
                                                        <a href="compare.html" class="ec-btn-group compare"
                                                            title="Compare"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a href="#" class="ec-btn-group quickview"
                                                            data-link-action="quickview" title="Quick view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#ec_quickview_modal"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                                class="svg_img pro_svg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern chair for office</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="old-price">$680</span>
                                                    <span class="new-price">$550</span>
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
        </div>
    </section>
    <!-- ec Product tab Area End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-section section-space-mt section-space-mb">
        <h2 class="d-none">Offer</h2>
        <!-- <img src="{{asset('public/frontend-assets') }}/images/offer-image/offer_bg.jpg" alt="" class="offer_bg" /> -->
        <div class="container">
            <div class="row">
                <div class="ec-offer-inner">
                    <div class="col-sm-4 ec-offer-content">
                        <h2 class="ec-offer-stitle">Happy Sunday</h2>
                        <h2 class="ec-offer-title">40% off</h2>
                        <span class="ec-offer-desc">All Modern Furnitures</span>
                        <div class="countdowntimer"><span id="ec-offer-count"></span></div>
                        <span class="ec-offer-btn"><a href="#" class="btn btn-lg btn-secondary">Shop Now</a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- Trending Item Start -->
    <section class="section ec-trend-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Trending Item</h2>
                        <p class="sub-title">Check out our trending products.</p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn"><a class="btn-secondary" href="shop-left-sidebar-col-3.html">View All</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-trend-slider">
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Woolen fabric single sofa</a></h5>
                                <span class="ec-price">
                                    <span class="old-price">$1900</span>
                                    <span class="new-price">$1550</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="sale">Top Seller</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern LED night lamp</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$230</span>
                                    <span class="new-price">$180</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/25_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="percentage">-35%</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern tabel for living room</a></h5>
                                <span class="ec-price">
                                    <span class="old-price">$530</span>
                                    <span class="new-price">$399</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/26_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="percentage">-25%</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Single wooden sofa</a></h5>
                                <span class="ec-price">
                                    <span class="old-price">$450</span>
                                    <span class="new-price">$400</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/20_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED Night lamp showpiece</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$120</span>
                                    <span class="new-price">$80</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/21_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="sale">Top Seller</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Revolving chair for office</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$999</span>
                                    <span class="new-price">$799</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/22_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="stock">Out of stock</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Modern table for living room</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$450</span>
                                    <span class="new-price">$400</span>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="product-left-sidebar.html" class="image">
                                        <img class="main-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_1.jpg"
                                            alt="Product" />
                                        <img class="hover-image"
                                            src="{{asset('public/frontend-assets') }}/images/product-image/28_2.jpg"
                                            alt="Product" />
                                    </a>
                                    <span class="flags">
                                        <span class="stock">Out of stock</span>
                                    </span>
                                    <div class="ec-pro-actions">
                                        <button title="Add To Cart" class=" add-to-cart"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/cart.svg"
                                                class="svg_img pro_svg" alt="" /></button>
                                        <a href="compare.html" class="ec-btn-group compare"
                                            title="Compare"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a href="#" class="ec-btn-group quickview"
                                            data-link-action="quickview" title="Quick view"
                                            data-bs-toggle="modal"
                                            data-bs-target="#ec_quickview_modal"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                        <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                class="svg_img pro_svg" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wooden bed with mattress</a>
                                </h5>
                                <span class="ec-price">
                                    <span class="old-price">$5500</span>
                                    <span class="new-price">$5100</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Trending Item end -->

    <!--  services Section Start -->
    <section class="section ec-services-section section-space-p">
        <h2 class="d-none">Services</h2>
        <div class="container">
            <div class="row mb-minus-30">
                <div class="ec_ser_content ec_ser_content_1 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_1.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Unlimited Delivery</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy.</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_2 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_3.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>Free Returns</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy .</p>
                        </div>
                    </div>
                </div>
                <div class="ec_ser_content ec_ser_content_3 col-sm-12 col-md-4">
                    <div class="ec_ser_inner">
                        <div class="ec-service-image">
                            <img src="{{asset('public/frontend-assets') }}/images/icons/service_2.svg" class="svg_img" alt="" />
                        </div>
                        <div class="ec-service-desc">
                            <h2>24/7 Support</h2>
                            <p>Lorem ipsum, or lipsum as it is sometimes known, is dummy .</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services Section End -->

    <!-- ec testimonial Start -->
    <section class="section ec-test-section section-space-ptb-100 section-space-mt section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Testimonial</h2>
                        <p class="sub-title">What our clients say about us!</p>
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
                                    <div class="ec-test-icon"><img src="{{asset('public/frontend-assets') }}/images/testimonial/quote-3.svg"
                                            class="svg_img test_svg" alt="" /></div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam.</div>
                                    <div class="ec-test-name">Jenifer Brown</div>
                                    <div class="ec-test-designation">Manager of AZ</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/2.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-icon"><img src="{{asset('public/frontend-assets') }}/images/testimonial/quote-3.svg"
                                            class="svg_img test_svg" alt="" /></div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam.</div>
                                    <div class="ec-test-name">Maria Zukerbug</div>
                                    <div class="ec-test-designation">Manager of AZ</div>
                                </div>
                            </div>
                        </li>
                        <li class="ec-test-item">
                            <div class="ec-test-inner">
                                <div class="ec-test-img"><img alt="testimonial" title="testimonial"
                                        src="{{asset('public/frontend-assets') }}/images/testimonial/3.jpg" /></div>
                                <div class="ec-test-content">
                                    <div class="ec-test-icon"><img src="{{asset('public/frontend-assets') }}/images/testimonial/quote-3.svg"
                                            class="svg_img test_svg" alt="" /></div>
                                    <div class="ec-test-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                                        minim veniam.</div>
                                    <div class="ec-test-name">Moris Selemen</div>
                                    <div class="ec-test-designation">Manager of AZ</div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ec testimonial end -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Instagram <span>#Thestore</span></h2>
                        <p class="sub-title">Add Stories on instagram and tell us how impact our product in your life.
                        </p>
                    </div>
                    <div class="section-btn">
                        <span class="ec-section-btn"><a class="btn-secondary" href="#">Follow Us</a></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="ec-insta-wrapper">
                    <div class="ec-insta-outer">
                        <div class="insta-auto">
                            <!-- instagram item -->
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/1.jpg"
                                            alt="">

                                    </a>
                                </div>
                            </div>
                            <!-- instagram item -->
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/2.jpg"
                                            alt="">

                                    </a>
                                </div>
                            </div>
                            <!-- instagram item -->
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/3.jpg"
                                            alt="">

                                    </a>
                                </div>
                            </div>
                            <!-- instagram item -->
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/4.jpg"
                                            alt="">

                                    </a>
                                </div>
                            </div>
                            <!-- instagram item -->
                            <div class="ec-insta-item">
                                <div class="ec-insta-inner">
                                    <a href="#" target="_blank"><img src="{{asset('public/frontend-assets') }}/images/instragram-image/5.jpg"
                                            alt="">

                                    </a>
                                </div>
                            </div>
                            <!-- instagram item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Instagram End -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-section section-space-ptb-100 section-space-mt">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul class="ec-brand-inner">
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/9.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/10.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/11.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/12.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/13.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/14.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/15.jpg" /></a></div>
                        </li>
                        <li class="ec-brand-item col-lg-3 col-md-4 col-sm-4">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{asset('public/frontend-assets') }}/images/brand-image/16.jpg" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-container">
            <div class="footer-offer">
                <div class="container">
                    <div class="row">
                        <div class="text-center footer-off-msg">
                            <span>Win a contest! Get this limited-editon</span><span class="footer-off-text">- Free
                                Office Chair</span><a href="#" target="_blank">View Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-lg-3 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img
                                            src="{{asset('public/frontend-assets') }}/images/logo/footer-logo-3.png" alt=""><img
                                            class="dark-footer-logo" src="{{asset('public/frontend-assets') }}/images/logo/dark-logo-3.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <h4 class="ec-footer-heading">Location</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">71 Pilgrim Avenue Chevy Chase, MD 20815, USA</li>
                                    </ul>
                                    <div class="col-sm-12 col-lg-3 ec-footer-social">
                                        <div class="ec-footer-widget">
                                            <div class="ec-footer-links">
                                                <ul class="align-items-center">
                                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a>
                                                    </li>
                                                    <li class="list-inline-item"><a href="#"><i
                                                                class="ecicon eci-instagram"></i></a></li>
                                                    <li class="list-inline-item"><a href="#"><i class="ecicon eci-linkedin"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
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
                                                <button id="ec-news-btn" class="button btn-secondary" type="submit"
                                                    name="subscribe" value=""><i class="ecicon eci-paper-plane-o"
                                                        aria-hidden="true"></i></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Account</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="user-profile.html">My Account</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Order History</a></li>
                                        <li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="offer.html">Specials</a></li>
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
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy </a>
                                        </li>
                                        <li class="ec-footer-link"><a href="#">Customer Service</a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Term & condition</a>
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
                                        <li class="ec-footer-link"><a href="{{url('/faq')}}">FAQ</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery Information</a>
                                        </li>
                                        <li class="ec-footer-link"><a href="{{url('/contact')}}">Contact us</a></li>
                                    </ul>
                                </div>
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
                                <div class="ec-copy">Copyright © 2021 <a class="site-name text-upper"
                                        href="{{url('/')}}">Ekka</a>. All Rights Reserved</div>
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
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/19_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/19_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/19_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/27_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{asset('public/frontend-assets') }}/images/product-image/27_2.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Single sofa for living room</a></h5>
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
                                    <span class="old-price">$450.00</span>
                                    <span class="new-price">$400.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span style="background-color:#696d62;"></span></li>
                                                <li><span style="background-color:#2ea1cd;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-secondary"><img
                                                src="{{asset('public/frontend-assets') }}/images/icons/pro_cart.svg" class="svg_img pro_svg"
                                                alt="" /> Add To Cart</button>
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

    <!-- FB Chat Messenger -->
    <div class="ec-fb-style fb-right-bottom">

        <!-- Start Floating Panel Container -->
        <div class="fb-panel">
            <!-- Panel Content -->
            <div class="fb-header">
                <img src="{{asset('public/frontend-assets') }}/images/user/1.jpg" alt="pic" />
                <h2>Maria Mark</h2>
                <p>Technical Manager</p>
            </div>
            <div class="fb-body">
                <p><b>Hey there &#128515;</b></p>
                <p>Need help ? just send me a message.</p>
            </div>
            <div class="fb-footer">

                <a href="http://m.me/Loopinfosol" target="_blank" class="fb-msg-button">
                    <span>Send Message</span>
                    <svg width="13px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>

            </div>
        </div>
        <!--/ End Floating Panel Container -->

        <!-- Start Right Floating Button -->
        <div class="fb-button fb-right-bottom">
            <img class="fa-messenger" src="{{asset('public/frontend-assets') }}/images/icons/chat-icon.png" alt="icon" />
        </div>
        <!--/ End Right Floating Button -->

    </div>
    <!-- FB Chat Messenger end -->

    <!-- Newsletter Modal Start -->
    <div id="ec-popnews-bg"></div>
    <div id="ec-popnews-box">
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
    <script src="{{asset('public/frontend-assets') }}/js/plugins/fb-chat.js"></script>

    <!-- Main Js -->
    <script src="{{asset('public/frontend-assets') }}/js/vendor/index.js"></script>
    <script src="{{asset('public/frontend-assets') }}/js/demo-3.js"></script>

</body>

</html>
