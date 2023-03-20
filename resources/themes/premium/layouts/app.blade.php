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

     <title>HI</title>
     <meta name="keywords" content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
     <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
     <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('public/frontend-assets') }}/images/favicon/favicon-4.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('public/frontend-assets') }}/images/favicon/favicon-4.png" />
    <meta name="msapplication-TileImage" content="{{ asset('public/frontend-assets') }}/images/favicon/favicon-4.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/plugins/bootstrap.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('public/frontend-assets') }}/css/demo4.css" />

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
                            <ul class="mb-0">
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-youtube-play"></i></a>
                                </li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-vimeo"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="ecicon eci-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Header Top social End -->
                    <!-- Header Top Message Start -->
                    <div class="col text-center header-top-center">
                        <div class="header-top-message">
                            World's Fastest Online Shopping Destination
                        </div>
                    </div>
                    <!-- Header Top Message End -->
                    <!-- Header Top Language Currency -->
                    <div class="col header-top-right d-none d-lg-block">
                        <div class="header-top-right-inner d-flex justify-content-end">
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
                                <button class="dropdown-toggle" data-bs-toggle="dropdown">Dollar <i
                                        class="ecicon eci-angle-down" aria-hidden="true"></i></button>
                                <ul class="dropdown-menu">
                                    <li class="active"><a class="dropdown-item" href="#">USD $</a></li>
                                    <li><a class="dropdown-item" href="#">EUR €</a></li>
                                </ul>
                            </div>
                            <!-- Currency End -->

                        </div>
                    </div>
                    <!-- Header Top Language Currency -->
                    <!-- Header Top responsive Action -->
                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header User Start -->
                            <a href="{{url('/customer/login')}}" class="ec-header-btn ec-header-user">
                                <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/user.svg"
                                        class="svg_img header_svg" alt="" /></div>
                            </a>
                            <!-- Header User End -->
                            <!-- Header Cart Start -->
                            <a href="#" class="ec-header-btn ec-header-wishlist">
                                <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                        class="svg_img header_svg" alt="" /></div>
                                <span class="ec-header-count ec-wishlist-count">0</span>
                            </a>
                            <!-- Header Cart End -->
                            <!-- Header Cart Start -->
                            <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/cart.svg"
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
                        <div class="align-self-center ec-header-logo">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="{{ asset('public/frontend-assets') }}/images/logo/logo-4.png" alt="Site Logo" /><img
                                        class="dark-logo" src="{{ asset('public/frontend-assets') }}/images/logo/dark-logo-4.png" alt="Site Logo"
                                        style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="#">
                                    <div class="ec-search-select-inner">
                                        <select name="ec-search-cat" id="ec-search-cat">
                                            <option selected disabled>Category</option>
                                            <option value="cloths">Cloths</option>
                                            <option value="bag">Bag</option>
                                            <option value="shoes">Shoes</option>
                                        </select>
                                    </div>
                                    <input class="form-control" placeholder="Search Your Products..." type="text">
                                    <button class="search_submit" type="submit"><img src="{{ asset('public/frontend-assets') }}/images/icons/search.svg"
                                            class="svg_img search_svg" alt="" /></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->

                        <!-- Ec Header Button Start -->
                        <div class="align-self-center">
                            <div class="ec-header-bottons">
                                <!-- Header User Start -->
                                <a href="{{url('/customer/login')}}" class="ec-header-btn ec-header-user">
                                    <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/user.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <div class="ec-btn-desc">
                                        <span class="ec-btn-title">Account</span>
                                        <span class="ec-btn-stitle">Login</span>
                                    </div>
                                </a>
                                <!-- Header User End -->
                                <!-- Header wishlist Start -->
                                <a href="#" class="ec-header-btn ec-header-wishlist">
                                    <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/wishlist.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <div class="ec-btn-desc">
                                        <span class="ec-btn-title">Wishlist</span>
                                        <span class="ec-btn-stitle"><b class="ec-wishlist-count">0</b>-items</span>
                                    </div>
                                </a>
                                <!-- Header wishlist End -->
                                <!-- Header Cart Start -->
                                <a href="#ec-side-cart" class="ec-header-btn ec-side-toggle">
                                    <div class="header-icon"><img src="{{ asset('public/frontend-assets') }}/images/icons/cart.svg"
                                            class="svg_img header_svg" alt="" /></div>
                                    <div class="ec-btn-desc">
                                        <span class="ec-btn-title">Cart</span>
                                        <span class="ec-btn-stitle"><b class="ec-cart-count">3</b>-items</span>
                                    </div>
                                </a>
                                <!-- Header Cart End -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ekka Menu Start -->
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
                                            src="{{ asset('public/frontend-assets') }}/images/menu-banner/1.jpg" alt=""></a>
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
                        <li><a href="offer.html">Offers</a></li>
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
        <!-- Ec Header Button End -->
        <div class="ec-header-cat d-none d-lg-block">
            <div class="container position-relative">
                <div class="row ">
                    <div class="col ec-category-block">
                        <div class="ec-category-menu">
                            <div class="ec-category-toggle">
                                <i class="ecicon eci-bars"></i>
                                <span class="ec-category-title d-1199">Shop By Category</span>
                                <i class="ecicon eci-angle-down d-1199" aria-hidden="true"></i>
                            </div>
                            <div class="ec-category-content">
                                <div class="ec-category-dropdown">
                                    <ul class="ec-category-wrapper">
                                        <li><a title="" class="ec-cat-menu-link" href="#">Home & Kitchen</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Electronics & Digital</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Fashion</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Electronics</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Office Furniture</a></li>
                                        <li><a title="" class="ec-cat-menu-link" href="#">Hotel Furniture</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- EC Main Menu Start -->
                    <div id="ec-main-menu-desk" class="d-none d-lg-block sticky-nav">
                        <div class="position-relative nav-desk">
                            <div class="row">
                                <div class="col-md-12 align-self-center">
                                    <div class="ec-main-menu">
                                        <ul>
                                            <li class="dropdown"><a href="{{url('/')}}">Home</a></li>
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
                                                            <li><a href="catalog-single-vendor.html">Single Vendor</a></li>
                                                            <li><a href="catalog-multi-vendor.html">Multi Vendor</a></li>
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
                                            <li class="non-drop"><a href="offer.html">Offers</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Ec Main Menu End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="col ec-header-logo">
                            <div class="header-logo">
                                <a href="{{url('/')}}"><img src="{{ asset('public/frontend-assets') }}/images/logo/logo-4.png" alt="Site Logo" /><img class="dark-logo" src="{{ asset('public/frontend-assets') }}/images/logo/dark-logo-4.png" alt="Site Logo" style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->
                        <div class="col ec-category-block">
                            <div class="ec-category-menu">
                                <div class="ec-category-toggle">
                                    <i class="ecicon eci-bars"></i>
                                    <span class="ec-category-title d-479">Category</span>
                                </div>
                                <div class="ec-category-content">
                                    <div class="ec-category-dropdown">
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
                    </div>
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <div class="ec-search-select-inner">
                                    <select name="ec-search-cat">
                                        <option selected disabled>Category</option>
                                        <option value="cloths">Cloths</option>
                                        <option value="bag">Bag</option>
                                        <option value="shoes">Shoes</option>
                                    </select>
                                </div>
                                <input class="form-control" placeholder="Search Your Products..." type="text">
                                <button class="search_submit" type="submit"><img src="{{ asset('public/frontend-assets') }}/images/icons/search.svg"
                                        class="svg_img search_svg" alt="" /></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->

                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
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
                                src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="single-product-left-sidebar.html" class="cart_pro_title">Hooded Neck full slive T-Shirt</a>
                            <span class="cart-price"><span>$84.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('public/frontend-assets') }}/images/product-image/36_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Perfume royal msz</a>
                            <span class="cart-price"><span>$125.00</span> x 1</span>
                            <div class="qty-plus-minus">
                                <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                            </div>
                            <a href="#" class="remove">×</a>
                        </div>
                    </li>
                    <li>
                        <a href="product-left-sidebar.html" class="sidecart_pro_img"><img
                                src="{{ asset('public/frontend-assets') }}/images/product-image/37_1.jpg" alt="product"></a>
                        <div class="ec-pro-content">
                            <a href="product-left-sidebar.html" class="cart_pro_title">Lime Crime Velvetines Liquid Matte Lipstick</a>
                            <span class="cart-price"><span>$48.00</span> x 1</span>
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
        <div class="ec-slider swiper-container main-slider-nav main-slider-dot">
            <!-- Main slider -->
            <div class="swiper-wrapper">
                <div class="ec-slide-item swiper-slide d-flex slide-1">
                    <div class="container align-self-center">
                        <div class="row">
                            <div class="col-sm-12 align-self-center">
                                <div class="ec-slide-content slider-animation">
                                    <h2 class="ec-slide-stitle">Stylish & comfort</h2>
                                    <h1 class="ec-slide-title">Living sofa</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>2999</b>.99</p>
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
                                    <h2 class="ec-slide-stitle">Home appliances</h2>
                                    <h1 class="ec-slide-title">Furniture</h1>
                                    <div class="ec-slide-desc">
                                        <p>starting at $ <b>1900</b>.00</p>
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
    <!-- Main Slider End -->

    <!--  category Section Start -->
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
                <div class="ec_cat_content ec_cat_content_1 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/6.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>phone</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_2 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/7.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Furniture</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_3 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/8.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Clothing</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_4 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/9.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Beauty</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_5 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/10.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Watches</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_6 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/11.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Jewellery</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_7 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/12.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Fashion</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
                <div class="ec_cat_content ec_cat_content_8 col-sm-12 col-md-6 col-lg-3">
                    <div class="ec_cat_inner">
                        <div class="ec-category-image">
                            <img src="{{ asset('public/frontend-assets') }}/images/category-image/13.jpg" alt="" />
                        </div>
                        <div class="ec-category-desc">
                            <h3>Electronic</h3>
                            <ul>
                                <li><a href="#">Bumpers</a></li>
                                <li><a href="#">Doors</a></li>
                                <li><a href="#">Fenders</a></li>
                                <li><a href="#">Mirrors</a></li>
                            </ul>
                            <a href="#" class="cat-show-all">Show All <i class="ecicon eci-angle-double-right"
                                    aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--category Section End -->

    <!--  offer Section Start -->
    <section class="section ec-offer-secti section-space-m">
        <h2 class="d-none">Offer</h2>
        <div class="container">
            <div class="row ec-pos ec-ofr-bnr">
                <!-- <img src="{{ asset('public/frontend-assets') }}/images/offer-image/offer_bg.jpg" alt="" class="offer_bg" /> -->
                <div class="ec-offer-inner">
                    <div class="col-xl-5 col-md-6 col-sm-6 align-self-center ec-offer-content">
                        <h3 class="ec-offer-stitle">Start Today !</h3>
                        <h2 class="ec-offer-title">The Trends Benefits</h2>
                        <span class="ec-offer-desc">Select From Wide Range of Collection</span>
                        <span class="ec-offer-btn"><a href="#" class="btn btn-lg btn-primary">Shop Now <i
                                    class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- offer Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2 class="ec-title">New Products</h2>
                    </div>
                </div>

                <!-- Tab Start -->
                <div class="col-md-12 ec-pro-tab">
                    <ul class="ec-pro-tab-nav nav justify-content-end">
                        <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab"
                                href="#tab-pro-new-arrivals">Sale Products</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#tab-pro-special-offer">Top
                                Rated Products</a></li>
                        <li class="nav-item"><a class="nav-link" data-bs-toggle="tab"
                                href="#tab-pro-best-sellers">Latest Products</a></li>
                    </ul>
                </div>
                <!-- Tab End -->
            </div>
            <div class="row margin-minus-b-15">
                <div class="col">
                    <div class="tab-content">
                        <!-- 1st Product tab start -->
                        <div class="tab-pane fade show active" id="tab-pro-new-arrivals">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Toys</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#a88960;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f778fc;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8b83ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-tooltip="Sky Blue"><span
                                                                            style="background-color:#5ea561;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Living room lighting</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$152.00</span>
                                                    <span class="old-price">$180.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e9e9e9;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#b6f0ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#a2ffcc;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Furniture</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Bed room night lamp</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$59.00</span>
                                                    <span class="old-price">$87.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#d8bd74;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Long slive t-shirt for men</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$489.00</span>
                                                    <span class="old-price">$599.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_0.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#ac96fd;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#6ec991;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$410.00" data-new="$399.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$425.00"
                                                                        data-new="$499.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                                        data-new="$550.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$599.00"
                                                                        data-new="$489.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Digital</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple SE Smartwatch (GPS, 40mm)</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#fcb0b0;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8fc9ff;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_2.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Portable Room Air Purifier</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e2e2e2;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f8c9c9;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Hooded Neck full slive T-Shirt</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$49.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#fd9191;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#8991ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#da9343;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$65.00" data-new="$49.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                        data-new="$55.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$79.00"
                                                                        data-new="$60.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$82.00"
                                                                        data-new="$63.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Headphones bluetooth nano</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$200.00" data-new="$199.00"
                                                                        data-tooltip="Small">Orange</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$210.00"
                                                                        data-new="$209.00" data-tooltip="Medium">Rose</a>
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
                        <!-- ec 1st Product tab end -->
                        <!-- ec 2nd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-special-offer">
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Furniture</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Bed room night lamp</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$59.00</span>
                                                    <span class="old-price">$87.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#d8bd74;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Long slive t-shirt for men</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$489.00</span>
                                                    <span class="old-price">$599.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_0.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#ac96fd;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#6ec991;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$410.00" data-new="$399.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$425.00"
                                                                        data-new="$499.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                                        data-new="$550.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$599.00"
                                                                        data-new="$489.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Digital</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple SE Smartwatch (GPS, 40mm)</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#fcb0b0;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8fc9ff;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_2.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Portable Room Air Purifier</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e2e2e2;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f8c9c9;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Toys</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#a88960;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f778fc;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8b83ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-tooltip="Sky Blue"><span
                                                                            style="background-color:#5ea561;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Living room lighting</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$152.00</span>
                                                    <span class="old-price">$180.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e9e9e9;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#b6f0ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#a2ffcc;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Hooded Neck full slive T-Shirt</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$49.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#fd9191;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#8991ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#da9343;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$65.00" data-new="$49.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                        data-new="$55.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$79.00"
                                                                        data-new="$60.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$82.00"
                                                                        data-new="$63.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Headphones bluetooth nano</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$200.00" data-new="$199.00"
                                                                        data-tooltip="Small">Orange</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$210.00"
                                                                        data-new="$209.00" data-tooltip="Medium">Rose</a>
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
                        <!-- ec 2nd Product tab end -->
                        <!-- ec 3rd Product tab start -->
                        <div class="tab-pane fade" id="tab-pro-best-sellers">
                            <div class="row">

                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="product-left-sidebar.html" class="image">
                                                    <img class="main-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Hooded Neck full slive T-Shirt</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$49.00</span>
                                                    <span class="old-price">$65.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#fd9191;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#8991ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#da9343;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$65.00" data-new="$49.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                        data-new="$55.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$79.00"
                                                                        data-new="$60.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$82.00"
                                                                        data-new="$63.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/36_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Headphones bluetooth nano</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$200.00" data-new="$199.00"
                                                                        data-tooltip="Small">Orange</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$210.00"
                                                                        data-new="$209.00" data-tooltip="Medium">Rose</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Long slive t-shirt for men</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$489.00</span>
                                                    <span class="old-price">$599.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_0.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#ac96fd;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/32_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#6ec991;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="ec-pro-size">
                                                            <ul class="ec-opt-size">
                                                                <li class="active"><a href="#" class="ec-opt-sz"
                                                                        data-old="$410.00" data-new="$399.00"
                                                                        data-tooltip="Small">S</a></li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$425.00"
                                                                        data-new="$499.00" data-tooltip="Medium">M</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$450.00"
                                                                        data-new="$550.00" data-tooltip="Large">L</a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-sz" data-old="$599.00"
                                                                        data-new="$489.00"
                                                                        data-tooltip="Extra Large">XL</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Digital</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple SE Smartwatch (GPS, 40mm)</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$500.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#fcb0b0;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/33_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8fc9ff;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg" alt="Product" />
                                                </a>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Furniture</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Bed room night lamp</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$59.00</span>
                                                    <span class="old-price">$87.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#d8bd74;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/31_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#cecece;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/34_2.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Portable Room Air Purifier</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                    <span class="old-price">$650.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e2e2e2;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/34_3.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f8c9c9;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="new">New</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Toys</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Baby toy teddy bear</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$199.00</span>
                                                    <span class="old-price">$200.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#a88960;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#f778fc;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#8b83ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/29_4.jpg"
                                                                        data-tooltip="Sky Blue"><span
                                                                            style="background-color:#5ea561;"></span></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg" alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg" alt="Product" />
                                                </a>
                                                <span class="flags">
                                                    <span class="sale">Sale</span>
                                                </span>
                                                <div class="ec-pro-actions">
                                                    <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="#" class="ec-btn-group quickview"
                                                        data-link-action="quickview" title="Quick view"
                                                        data-bs-toggle="modal" data-bs-target="#ec_quickview_modal"><img
                                                            src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                    <a href="compare.html" class="ec-btn-group compare"
                                                        title="Compare"><img src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg"
                                                            class="svg_img pro_svg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                            <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Living room lighting</a></h5>
                                            <div class="ec-pro-rat-price">
                                                <span class="ec-price">
                                                    <span class="new-price">$152.00</span>
                                                    <span class="old-price">$180.00</span>
                                                </span>
                                                <span class="ec-pro-rating">
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star fill"></i>
                                                    <i class="ecicon eci-star"></i>
                                                </span>
                                            </div>
                                            <div class="ec-pro-btn">
                                                <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                                <button title="Select Option" class="select-option">Select
                                                    Option</button>
                                                <div class="ec-pro-option">
                                                    <div class="ec-pro-opt-inner">
                                                        <div class="ec-pro-color">
                                                            <ul class="ec-opt-swatch ec-change-img">
                                                                <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_1.jpg"
                                                                        data-tooltip="Gray"><span
                                                                            style="background-color:#e9e9e9;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_2.jpg"
                                                                        data-tooltip="Orange"><span
                                                                            style="background-color:#b6f0ff;"></span></a>
                                                                </li>
                                                                <li><a href="#" class="ec-opt-clr-img"
                                                                        data-src="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/30_3.jpg"
                                                                        data-tooltip="Green"><span
                                                                            style="background-color:#a2ffcc;"></span></a>
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
                        <!-- ec 3rd Product tab end -->
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
            <div class="row">
                <div class="ec-banner-inner">
                    <div class="ec-banner-block ec-banner-block-1">
                        <div class="banner-block">
                            <img src="{{ asset('public/frontend-assets') }}/images/banner/19.jpg" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-disc">25% discount</span>
                                    <span class="ec-banner-title">New Security Camera</span>
                                    <span class="ec-banner-stitle">Starting @ $225</span>
                                </div>
                                <span class="ec-banner-btn"><a href="#">Shop Now <i
                                            class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-block ec-banner-block-2">
                        <div class="banner-block">
                            <img src="{{ asset('public/frontend-assets') }}/images/banner/20.jpg" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-disc">45% discount</span>
                                    <span class="ec-banner-title">Small bottle grinder</span>
                                    <span class="ec-banner-stitle">Starting @ $225</span>
                                </div>
                                <span class="ec-banner-btn"><a href="#">Shop Now <i
                                            class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                    <div class="ec-banner-block ec-banner-block-3">
                        <div class="banner-block">
                            <img src="{{ asset('public/frontend-assets') }}/images/banner/21.jpg" alt="" />
                            <div class="banner-content">
                                <div class="banner-text">
                                    <span class="ec-banner-disc">Upto 20% off</span>
                                    <span class="ec-banner-title">Glossy red lipstick</span>
                                    <span class="ec-banner-stitle">Starting @ $225</span>
                                </div>
                                <span class="ec-banner-btn"><a href="#">Shop Now <i
                                            class="ecicon eci-angle-double-right" aria-hidden="true"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Banner Section End -->

    <!--  Day of deal & service Section Start -->
    <section class="section ec-ser-spe-section section-space-p">
        <div class="container">
            <div class="row">
                <!--  Special Section Start -->
                <div class="ec-spe-section col-lg-9 col-md-9 col-sm-9 sectopn-spc-mb">
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
                                        <div class="ec-spe-pro-cover">
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/8.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/9.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/10.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/11.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-thumb">
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/8.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/9.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/10.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/11.jpg" alt="">
                                            </div>
                                        </div>
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
                                    <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Solo Wireless smart Headphones</a></h5>
                                    <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                    <div class="ec-spe-price">
                                        <span class="new-price">$199.00</span>
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
                                        <span id="ec-spe-count-1"></span>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="ec-spe-product">
                            <div class="ec-spe-pro-inner">
                                <div class="ec-spe-pro-image-outer col-md-6 col-sm-12">
                                    <div class="ec-spe-pro-image">
                                        <div class="ec-spe-pro-cover">
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/12.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/13.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/14.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/15.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="ec-spe-pro-thumb">
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/12.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/13.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/14.jpg" alt="">
                                            </div>
                                            <div class="ec-spe-pro-slide">
                                                <img class="img-responsive"
                                                    src="{{ asset('public/frontend-assets') }}/images/product-image/15.jpg" alt="">
                                            </div>
                                        </div>
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
                                    <h5 class="ec-spe-pro-title"><a href="product-left-sidebar.html">Royal fragrance Perfume 50ml</a></h5>
                                    <div class="ec-spe-pro-desc">Lorem ipsum dolor sit amet consectetur Lorem ipsum
                                        dolor dolor sit amet consectetur Lorem ipsum dolor</div>
                                    <div class="ec-spe-price">
                                        <span class="new-price">$199.00</span>
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
                <!--  Testimonial & Special Section End -->

                <!--  services Section Start -->
                <div class="ec-services-section col-lg-3 col-md-3 col-sm-3">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">Our Services</h2>
                        </div>
                    </div>
                    <div class="ec_ser_block">
                        <div class="ec_ser_content ec_ser_content_1 col-sm-12">
                            <div class="ec_ser_inner">
                                <div class="ec-service-image">
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/service_4_1.svg" class="svg_img ser_svg" alt="" />
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
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/service_4_2.svg" class="svg_img ser_svg" alt="" />
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
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/service_4_3.svg" class="svg_img ser_svg" alt="" />
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
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/service_4_4.svg" class="svg_img ser_svg" alt="" />
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
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/service_4_5.svg" class="svg_img ser_svg" alt="" />
                                </div>
                                <div class="ec-service-desc">
                                    <h2>30% money back</h2>
                                    <p>For Order Over $100</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--services Section End -->

    </section>
    <!--  End Day of deal & service Section Start -->

    <!-- Testimonial & Ec new product section -->
    <section class="section ec-new-test-product section-space-p">
        <div class="container">
            <div class="row">
                <!-- ec testimonial Start -->
                <div class="ec-test-section col-lg-3 col-md-3 col-sm-12 sectopn-spc-mb">
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
                                            src="{{ asset('public/frontend-assets') }}/images/testimonial/1.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{ asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
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
                                            src="{{ asset('public/frontend-assets') }}/images/testimonial/2.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{ asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
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
                                            src="{{ asset('public/frontend-assets') }}/images/testimonial/3.jpg" />
                                    </div>
                                    <div class="ec-test-content">
                                        <div class="ec-test-name">mark jofferson</div>
                                        <div class="ec-test-designation">- CEO & Founder Invision</div>
                                        <div class="ec-test-divider">
                                            <img src="{{ asset('public/frontend-assets') }}/images/testimonial/quotes.svg" class="svg_img test_svg"
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
                <!-- ec testimonial end -->
                <!-- New product Item Start -->
                <div class="ec-new-product col-lg-9 col-md-9 col-sm-12 margin-minus-b-15">
                    <div class="col-md-12">
                        <div class="section-title">
                            <h2 class="ec-title">New Products</h2>
                        </div>
                    </div>
                    <div class="ec-new-product-block">
                        <div class="ec-new-product-inner">
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ asset('public/frontend-assets') }}/images/product-image/37_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ asset('public/frontend-assets') }}/images/product-image/37_2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="new">New</span>
                                            </span>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                       <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Beauty</h6></a>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Lime Crime Velvetines Liquid Matte Lipstick</a></h5>
                                        <div class="ec-pro-rat-price">
                                            <span class="ec-price">
                                                <span class="new-price">$50.00</span>
                                                <span class="old-price">$60.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                        </div>
                                        <div class="ec-pro-btn">
                                            <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                            <button title="Select Option" class="select-option">Select Option</button>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-opt-inner">
                                                    <div class="ec-pro-size">
                                                        <ul class="ec-opt-size">
                                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                    data-old="$60.00" data-new="$50.00"
                                                                    data-tooltip="Small">Pink</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                    data-new="$65.00" data-tooltip="Medium">Brown</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="sale">Sale</span>
                                            </span>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                       <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Clothes</h6></a>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Hooded Neck full slive T-Shirt</a></h5>
                                        <div class="ec-pro-rat-price">
                                            <span class="ec-price">
                                                <span class="new-price">$49.00</span>
                                                <span class="old-price">$65.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                        </div>
                                        <div class="ec-pro-btn">
                                            <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                            <button title="Select Option" class="select-option">Select Option</button>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-opt-inner">
                                                    <div class="ec-pro-color">
                                                        <ul class="ec-opt-swatch ec-change-img">
                                                            <li class="active"><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                    data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg"
                                                                    data-tooltip="Gray"><span
                                                                        style="background-color:#fda6a6;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                    data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg"
                                                                    data-tooltip="Orange"><span
                                                                        style="background-color:#93beff;"></span></a>
                                                            </li>
                                                            <li><a href="#" class="ec-opt-clr-img"
                                                                    data-src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                    data-src-hover="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg"
                                                                    data-tooltip="Green"><span
                                                                        style="background-color:#cc9569;"></span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="ec-pro-size">
                                                        <ul class="ec-opt-size">
                                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                    data-old="$65.00" data-new="$49.00"
                                                                    data-tooltip="Small">S</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$70.00"
                                                                    data-new="$55.00" data-tooltip="Medium">M</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$82.00"
                                                                    data-new="$60.00" data-tooltip="Large">L</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$85.00"
                                                                    data-new="$70.00" data-tooltip="Extra Large">XL</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6 ec-product-content m-auto">
                                <div class="ec-product-inner">
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image" src="{{ asset('public/frontend-assets') }}/images/product-image/38_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image" src="{{ asset('public/frontend-assets') }}/images/product-image/38_2.jpg"
                                                    alt="Product" />
                                            </a>
                                            <span class="flags">
                                                <span class="sale">Sale</span>
                                            </span>
                                            <div class="ec-pro-actions">
                                                <a class="ec-btn-group wishlist" title="Wishlist"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/pro_wishlist.svg"
                                                        class="svg_img pro_svg" alt="" /></a>
                                                <a href="#" class="ec-btn-group quickview" data-link-action="quickview"
                                                    title="Quick view" data-bs-toggle="modal"
                                                    data-bs-target="#ec_quickview_modal"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/quickview.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                                <a href="compare.html" class="ec-btn-group compare" title="Compare"><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/compare.svg" class="svg_img pro_svg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                       <a href="shop-left-sidebar-col-3.html"><h6 class="ec-pro-stitle">Accessories</h6></a>
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Bathroom and Wash Basin Hand Wash</a></h5>
                                        <div class="ec-pro-rat-price">
                                            <span class="ec-price">
                                                <span class="new-price">$199.00</span>
                                                <span class="old-price">$200.00</span>
                                            </span>
                                            <span class="ec-pro-rating">
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star fill"></i>
                                                <i class="ecicon eci-star"></i>
                                            </span>
                                        </div>
                                        <div class="ec-pro-btn">
                                            <button title="Add To Cart" class="add-to-cart">Add To Cart</button>
                                            <button title="Select Option" class="select-option">Select Option</button>
                                            <div class="ec-pro-option">
                                                <div class="ec-pro-opt-inner">
                                                    <div class="ec-pro-size">
                                                        <ul class="ec-opt-size">
                                                            <li class="active"><a href="#" class="ec-opt-sz"
                                                                    data-old="$200.00" data-new="$199.00"
                                                                    data-tooltip="Small">Gray</a></li>
                                                            <li><a href="#" class="ec-opt-sz" data-old="$210.00"
                                                                    data-new="$209.00" data-tooltip="Medium">Purple</a></li>
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
                <!-- New product Item end -->
            </div>
        </div>
    </section>
    <!-- End Testimonial & new product section -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-area section-space-p">
        <h2 class="d-none">Brand</h2>
        <div class="container">
            <div class="row">
                <div class="ec-brand-outer">
                    <ul id="ec-brand-slider">
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/1.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/2.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/3.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/4.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/5.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/6.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/7.png" /></a></div>
                        </li>
                        <li class="ec-brand-item">
                            <div class="ec-brand-img"><a href="#"><img alt="brand" title="brand"
                                        src="{{ asset('public/frontend-assets') }}/images/brand-image/8.png" /></a></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

    <!-- Ec Instagram Start -->
    <section class="section ec-instagram-section section-space-pt">
        <h2 class="d-none">Instagram</h2>
        <div class="ec-insta-wrapper">
            <div class="ec-insta-outer">
                <div class="insta-auto">
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{ asset('public/frontend-assets') }}/images/instragram-image/1.jpg" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{ asset('public/frontend-assets') }}/images/instragram-image/2.jpg" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{ asset('public/frontend-assets') }}/images/instragram-image/3.jpg" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
                    <div class="ec-insta-item">
                        <div class="ec-insta-inner">
                            <a href="#" target="_blank"><img src="{{ asset('public/frontend-assets') }}/images/instragram-image/4.jpg" alt="">

                            </a>
                        </div>
                    </div>
                    <!-- instagram item -->
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
                    <div class="text-center footer-news-inner">
                        <div class="footer-news-block">
                            <div class="footer-news-stitle">Our Newsletter</div>
                            <div class="footer-news-title">Join Our Newsletter</div>
                            <div class="footer-news-desc">Subscribe to the Puik Store mailing list to receive updates on
                                new arrivals, special offers and other discount information.</div>
                            <div class="ec-subscribe-form">
                                <form id="ec-newsletter-form" name="ec-newsletter-form" method="post" action="#">
                                    <div id="ec_news_signup" class="ec-form">
                                        <input class="ec-email" type="email" required=""
                                            placeholder="Enter your email address" name="ec-email" value="" />
                                        <button id="ec-news-btn" class="button btn-primary" type="submit"
                                            name="subscribe" value="">Subscribe</button>
                                    </div>
                                </form>
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
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/foo-location.svg"
                                                        class="svg_img foo_svg" alt="" /></span>
                                                <p>2548 Broaddus Maple Court, Madisonville KY 4783, USA</p>
                                            </li>
                                            <li class="ec-footer-link ec-foo-call"><span><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/foo-wp.svg" class="svg_img foo_svg"
                                                        alt="" /></span><a href="tel:+919999999999">+91 999 999 9999</a>
                                            </li>
                                            <li class="ec-footer-link ec-foo-mail"><span><img
                                                        src="{{ asset('public/frontend-assets') }}/images/icons/foo-mail.svg" class="svg_img foo_svg"
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
                                    <img src="{{ asset('public/frontend-assets') }}/images/icons/payment.png" alt="">
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
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_1.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_2.jpg" alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="{{ asset('public/frontend-assets') }}/images/product-image/35_3.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Hooded Neck full slive T-Shirt</a></h5>
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
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span style="background-color:#3943bb;"></span></li>
                                                <li><span style="background-color:#de772c;"></span></li>
                                                <li><span style="background-color:#da0f2b;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="ec-pro-variation-inner ec-pro-variation-size">
                                        <span>Size</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span>S</span></li>
                                                <li><span>M</span></li>
                                                <li><span>L</span></li>
                                                <li><span>XL</span></li>
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
                <img src="{{ asset('public/frontend-assets') }}/images/whatsapp/profile_01.jpg" alt="profile image"/>
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
            <img src="{{ asset('public/frontend-assets') }}/images/icons/call.svg" class="svg_img cc-call-svg" alt="call image" />
        </div>
        <!--/ End Right Floating Button-->

    </div>
    <!-- Click To Call end -->

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

    <!-- Add to Cart successfully toast Start -->
    <div id="addtocart_toast" class="addtocart_toast">
        <div class="desc">You Have Add To Cart Successfully</div>
    </div>
    <div id="wishlist_toast" class="wishlist_toast">
        <div class="desc">You Have Add To Wishlist Successfully</div>
    </div>
    <!-- Add to Cart successfully toast end -->

    <!-- Vendor JS -->
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/popper.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/countdownTimer.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/scrollup.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/slick.min.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/infiniteslidev2.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/plugins/click-to-call.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('public/frontend-assets') }}/js/vendor/index.js"></script>
    <script src="{{ asset('public/frontend-assets') }}/js/demo-4.js"></script>

</body>

</html>
