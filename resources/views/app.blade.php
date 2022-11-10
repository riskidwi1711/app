{{-- <!DOCTYPE html>
<html lang=""{{ str_replace('_', '-', app()->getLocale()) }}"">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title inertia>"{{ config('app.name', 'Laravel') }}"</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @routes
        @viteReactRefresh
        @vite('resources/js/app.jsx')
        @inertiaHead
    </head>
    <body class="font-sans antialiased">
        
    </body>
</html> --}}


<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themes.pixelstrap.com/voxo/front-end/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 16:03:35 GMT -->
<head>
    <link rel="manifest" href="manifest.json" />
    <link rel="icon" href="{{asset('theme/images/favicon/2.png')}}" type="image/x-icon" />
    <link rel="apple-touch-icon" href="{{asset('theme/images/favicon/2.png')}}" />
    <meta name="theme-color" content="#e22454" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <meta name="apple-mobile-web-app-title" content="Voxo" />
    <meta name="msapplication-TileImage" content="{{asset('theme/images/favicon/2.png')}}" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Voxo">
    <meta name="keywords" content="Voxo">
    <meta name="author" content="Voxo">
    <link rel="icon" href="{{asset('theme/images/favicon/2.png')}}" type="image/x-icon" />
    <title>Index</title>

    <!-- Google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- bootstrap css -->
    <link id="rtl-link" rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/bootstrap.css')}}">

    <!-- font-awesome css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/font-awesome.css')}}">

    <!-- feather icon css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/feather-icon.css')}}">

    <!-- animation css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/animate.css')}}">

    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/slick/slick.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/css/vendors/slick/slick-theme.css')}}">

    <!-- Theme css -->
    <link id="color-link" rel="stylesheet" type="text/css" href="{{asset('theme/css/demo2.css')}}">

    {{-- inertia --}}
    @routes
    @viteReactRefresh
    @vite('resources/js/app.jsx')
    @inertiaHead
</head>

<body class="theme-color2 light ltr">

    <!-- header start -->
    <header class="header-style-2" id="home">
        <div class="main-header navbar-searchbar">
            <div class="container-fluid-lg">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-menu">
                            <div class="menu-left">
                                <div class="brand-logo">
                                    <a href="index.html">
                                        <svg class="svg-icon">
                                            <use class="fill-color" xlink:href="{{asset('theme/svg/icons.svg')}}"></use>
                                        </svg>
                                        <img src="{{asset('theme/images/logo.png')}}" class="img-fluid blur-up lazyload" alt="logo">
                                    </a>
                                </div>
                                <div class="category-menu">
                                    <div class="category-dropdown">
                                        <div class="close-btn d-xl-none">
                                            Category List
                                            <span class="back-category"><i class="fa fa-angle-left"></i>
                                            </span>
                                        </div>
                                        <ul>
                                            <li class="submenu">
                                                <a href="javascript:void(0)">watches</a>
                                                <ul class="category-mega-menu">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Watch Brands</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Coros</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Titan</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Citizen</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Casio</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Movado</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Tissot</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Watch Display</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Analog</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Digital</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Hybrid</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Tactile</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="shop-left-sidebar.html">Touchscreen</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Watch Style</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Casual</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Dress</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Fashion</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Luxury</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-banner">
                                                                    <img src="{{asset('theme/images/electronics/banner/4.jpg')}}"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="shop-left-sidebar.html">footwear</a>
                                            </li>

                                            <li class="submenu">
                                                <a href="javascript:void(0)">clothing</a>
                                                <ul class="category-mega-menu">
                                                    <li>
                                                        <div class="row">
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Women's fashion</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Dress</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Skirts</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Western
                                                                                wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Etahnic
                                                                                wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Sports
                                                                                wear</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Men's fashion</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Sports
                                                                                wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Etahnic
                                                                                wear</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">Western
                                                                                wear</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-childmenu">
                                                                    <div class="title-category">
                                                                        <h6>Accesories</h6>
                                                                    </div>
                                                                    <ul>
                                                                        <li>
                                                                            <a
                                                                                href="shop-left-sidebar.html">earrings</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">fashion
                                                                                jewellery</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">ties</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">caps and
                                                                                hats</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="shop-left-sidebar.html">cufflinks</a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="shop-left-sidebar.html">precious
                                                                                jewellery</a>
                                                                        </li>
                                                                        <li>
                                                                            <a
                                                                                href="shop-left-sidebar.html">necklaces</a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="col-xl-3">
                                                                <div class="category-banner">
                                                                    <img src="{{asset('theme/images/banner/1.jpg')}}"
                                                                        class="img-fluid blur-up lazyload" alt="">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="shop-left-sidebar.html">Accessories</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Home & decor</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Bags</a>
                                            </li>
                                            <li>
                                                <a href="shop-left-sidebar.html">Kitchan</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <nav>
                                <div class="main-navbar">
                                    <div id="mainnav">
                                        <div class="toggle-nav">
                                            <i class="fa fa-bars sidebar-bar"></i>
                                        </div>
                                        <ul class="nav-menu">
                                            <li class="back-btn d-xl-none">
                                                <div class="close-btn">
                                                    Menu
                                                    <span class="mobile-back"><i class="fa fa-angle-left"></i>
                                                    </span>
                                                </div>
                                            </li>
                                            <li class="mega-menu dropdown home-menu">
                                                <a href="javascript:void(0)" class="nav-link menu-title">home</a>
                                                <div class="mega-menu-container menu-content">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="index.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/fashion.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>

                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Fashion Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="flower-demo.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/flower.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Flowers Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="furniture-demo.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/furniture.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Furniture Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="electronic-demo.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/electonic.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Electronic Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="shoes-demo.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/shoes.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Shoes Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="opensubmegamenu">
                                                                        <ul>
                                                                            <li>
                                                                                <a href="vegetables-demo.html"
                                                                                    class="megamenu-image">
                                                                                    <img src="{{asset('theme/images/demo-image/vagetables.jpg')}}"
                                                                                        class="img-fluid blur-up lazyload"
                                                                                        alt="">
                                                                                </a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="megamenu-image-title pb-0">
                                                                        <h5 class="mb-0">Vegetables Demo</h5>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">shop</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="shop-canvas-filter.html">Shop Canvas Filter</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-category-slider.html">Shop Category Filter</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-filter-hide.html">Shop Filter Hide</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-left-sidebar.html">Shop Left Sidebar
                                                            <span>Trending</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list-infinite.html">Shop List Infinite</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-list.html">Shop List</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-no-sidebar.html">Shop No Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-top-filter.html">Shop Top Filter</a>
                                                    </li>
                                                    <li>
                                                        <a href="shop-with-category.html">Shop With Category <span
                                                                class="tren-budge">New</span></a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">product</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="product-4-image.html">Product 4 Images</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-360-view.html">Product 360 View</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-bundle.html">Product Bundle</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-left-sidebar.html">Product Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-left-thumbnail.html">Product Left thumbnail</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-no-sidebar.html">Product No Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-right-sidebar.html">Product Right Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-right-thumbnail.html">Product Right
                                                            thumbnail</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-sticky.html">Product Sticky</a>
                                                    </li>
                                                    <li>
                                                        <a href="product-video-thumbnail.html">Product Video
                                                            Thumbnail</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu dropdown ratio_40">
                                                <a href="javascript:void(0)" class="nav-link menu-title">
                                                    <div class="gradient-title">Voxo plus</div>
                                                </a>
                                                <div class="mega-menu-container poster-bg-image menu-content">
                                                    <div class="container-fluid">
                                                        <div class="row row-cols-5">
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Email Template</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/abandonment-email.html">Abandonment
                                                                                    Email</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/black-friday.html">Black
                                                                                    Fridday</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/email-template-1.html">Email
                                                                                    Template 1</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/email-template-2.html">Email
                                                                                    Template 2</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://themes.pixelstrap.com/voxo/email-template/offer.html">Offer
                                                                                    Template</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/order-success-1.html">Order
                                                                                    Success 1</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/order-success-2.html">Order
                                                                                    Success 2</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Email Template</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/product-review.html">Product
                                                                                    Review</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/reset-password.html">Reset
                                                                                    Password</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="https://themes.pixelstrap.com/voxo/email-template/welcome.html">Welcome
                                                                                    Template</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Invoice Template</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="https://themes.pixelstrap.com/voxo/invoice/invoice-1.html">Invoice
                                                                                    1 Template</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://themes.pixelstrap.com/voxo/invoice/invoice-2.html">Invoice
                                                                                    2 Template</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="https://themes.pixelstrap.com/voxo/invoice/invoice-3.html">Invoice
                                                                                    3 Template</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Portfolio Page</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="portfolio-2-grid.html">Portfolio
                                                                                    2 Grid</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-2-masonary.html">Portfolio
                                                                                    2 Masonary</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-3-grid.html">Portfolio
                                                                                    3 Grid</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-3-masonary.html">Portfolio
                                                                                    3 Masonary</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-4-grid.html">Portfolio
                                                                                    4 Grid</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-4-masonary.html">Portfolio
                                                                                    4 Masonary</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="portfolio-no-space.html">Portfolio
                                                                                    No Space</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Element Page</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="element-button.html">Element
                                                                                    Button</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="element-category.html">Element
                                                                                    Category</a>
                                                                            </li>
                                                                            <li>
                                                                                <a
                                                                                    href="element-collection-banner.html">Element
                                                                                    Collection Banner</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="element-deal-banner.html">Element
                                                                                    Deal Banner</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="element-header.html">Element
                                                                                    Header</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="element-home.html">Element
                                                                                    Home</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="element-product.html">Element
                                                                                    Product</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col mega-box">
                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Cookie Bar</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="furniture-demo.html">Bottom</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="electronic-demo.html">Bottom
                                                                                    Left</a>
                                                                            </li>
                                                                            <li>
                                                                                <a href="index.html">Bottom Right</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>

                                                                <div class="link-section">
                                                                    <div class="submenu-title">
                                                                        <h5>Search</h5>
                                                                    </div>
                                                                    <div class="submenu-content opensubmegamenu">
                                                                        <ul class="list">
                                                                            <li>
                                                                                <a href="vegetables-demo.html">Ajax
                                                                                    Search</a>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">pages</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="404.html">404</a>
                                                    </li>
                                                    <li>
                                                        <a href="log-in.html">Log In</a>
                                                    </li>
                                                    <li>
                                                        <a href="sign-up.html">Register</a>
                                                    </li>
                                                    <li>
                                                        <a href="forgot.html">Forgot Password</a>
                                                    </li>
                                                    <li>
                                                        <a href="cart.html">cart</a>
                                                    </li>
                                                    <li>
                                                        <a href="checkout.html">checkout</a>
                                                    </li>
                                                    <li>
                                                        <a href="coming-soon.html">coming soon<span>trending</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="compare.html">compare</a>
                                                    </li>
                                                    <li>
                                                        <a href="contact-us.html">contact us</a>
                                                    </li>
                                                    <li>
                                                        <a href="faq.html">faq</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-success.html">order success</a>
                                                    </li>
                                                    <li>
                                                        <a href="order-tracking.html">order tracking</a>
                                                    </li>
                                                    <li>
                                                        <a href="review.html">review</a>
                                                    </li>
                                                    <li>
                                                        <a href="search.html">search</a>
                                                    </li>
                                                    <li>
                                                        <a href="user-dashboard.html">user dashboard</a>
                                                    </li>
                                                    <li>
                                                        <a href="wishlist.html">wishlist</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a href="javascript:void(0)" class="nav-link menu-title">blog</a>
                                                <ul class="nav-submenu menu-content">
                                                    <li>
                                                        <a href="blog-details.html">Blog Details</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-infinite-scroll.html">Blog Infinite Scroll</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-listing.html">Blog Listing</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-masonary.html">blog Masonary <span>New</span></a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-no-sidebar.html">blog No Sidebar</a>
                                                    </li>
                                                    <li>
                                                        <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="mobile-poster d-flex d-xl-none">
                                                <img src="{{asset('theme/images/pwa.png')}}" class="img-fluid" alt="">
                                                <div class="mobile-contain">
                                                    <h5>Enjoy app-like experience</h5>
                                                    <p class="font-light">With this Screen option you can use Website
                                                        like an App.</p>
                                                    <a href="javascript:void(0)" id="installApp"
                                                        class="btn btn-solid-default btn-spacing w-100">ADD TO
                                                        HOMESCREEN</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>
                            <div class="menu-right">
                                <ul>
                                    <li>
                                        <div class="search-box">
                                            <i data-feather="search"></i>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown">
                                        <div class="cart-media">
                                            <i data-feather="user"></i>
                                        </div>
                                        <div class="onhover-div profile-dropdown">
                                            <ul>
                                                <li>
                                                    <a href="log-in.html" class="d-block">Login</a>
                                                </li>
                                                <li>
                                                    <a href="sign-up.html" class="d-block">Register</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown wislist-dropdown">
                                        <div class="cart-media">
                                            <a href="wishlist.html">
                                                <i data-feather="heart"></i>
                                                <span class="label label-theme rounded-pill">5</span>
                                            </a>
                                        </div>
                                        <div class="onhover-div">
                                            <a href="wishlist.html">
                                                <div class="wislist-empty">
                                                    <i class="fab fa-gratipay"></i>
                                                    <h6 class="mb-1">Your wislist empty !!</h6>
                                                    <p class="font-light mb-0">explore more and shortlist items.</p>
                                                </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="onhover-dropdown cart-dropdown">
                                        <button type="button" class="btn btn-solid-default btn-spacing">
                                            <i data-feather="shopping-cart" class="pe-2"></i>
                                            <span>$5686.25</span>
                                        </button>
                                        <div class="onhover-div">
                                            <div class="cart-menu">
                                                <div class="cart-title">
                                                    <h6>
                                                        <i data-feather="shopping-bag"></i>
                                                        <span class="label label-theme rounded-pill">5</span>
                                                    </h6>
                                                    <span class="d-md-none d-block">
                                                        <i class="fas fa-arrow-right back-cart"></i>
                                                    </span>
                                                </div>
                                                <ul class="custom-scroll">
                                                    <li>
                                                        <div class="media">
                                                            <img src="{{asset('theme/images/fashion/product/front/1.jpg')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                            <div class="media-body">
                                                                <h6>Slim Fit Plastic Coat</h6>
                                                                <div class="qty-with-price">
                                                                    <span>$78.00</span>
                                                                    <span>
                                                                        <input type="number" class="form-control"
                                                                            value="1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close d-block d-md-none"
                                                                aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="media">
                                                            <img src="{{asset('theme/images/fashion/product/front/7.jpg')}}"
                                                                class="img-fluid blur-up lazyload" alt="">
                                                            <div class="media-body">
                                                                <h6>Womens Stylish Jacket</h6>
                                                                <div class="qty-with-price">
                                                                    <span>$24.00</span>
                                                                    <span>
                                                                        <input type="number" class="form-control"
                                                                            value="1">
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <button type="button" class="btn-close d-block d-md-none"
                                                                aria-label="Close">
                                                                <i class="fas fa-times"></i>
                                                            </button>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cart-btn">
                                                <h6 class="cart-total"><span class="font-light">Total:</span> $
                                                    542.00</h6>
                                                <button onclick="location.href = 'cart.html';" type="button"
                                                    class="btn btn-solid-default btn-block">
                                                    Proceed to payment
                                                </button>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="search-full">
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i data-feather="search" class="font-light"></i>
                                    </span>
                                    <input type="text" class="form-control search-type" placeholder="Search here..">
                                    <span class="input-group-text close-search">
                                        <i data-feather="x" class="font-light"></i>
                                    </span>
                                </div>
                                <div class="search-suggestion">
                                    <ul class="custom-scroll">
                                        <li>
                                            <div class="product-cart media">
                                                <img src="{{asset('theme/images/electronics/product/1.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">New Smart Watch 4 ERT2</h6>
                                                    </a>
                                                    <ul class="rating p-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$28.00</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="product-cart media">
                                                <img src="{{asset('theme/images/electronics/product/5.jpg')}}"
                                                    class="img-fluid blur-up lazyload" alt="">
                                                <div class="media-body">
                                                    <a href="javascript:void(0)">
                                                        <h6 class="mb-1">Powermatic 900 W Juicer</h6>
                                                    </a>
                                                    <ul class="rating m-0 p-0">
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                        <li>
                                                            <i class="fas fa-star theme-color"></i>
                                                        </li>
                                                    </ul>
                                                    <p class="mb-0 mt-1">$35.00</p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->

    <!-- mobile fix menu start -->
    <div class="mobile-menu d-sm-none">
        <ul>
            <li>
                <a href="index.html" class="active">
                    <i data-feather="home"></i>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="javascript:void(0)" class="toggle-category">
                    <i data-feather="align-justify"></i>
                    <span>Category</span>
                </a>
            </li>
            <li>
                <a href="cart.html">
                    <i data-feather="shopping-bag"></i>
                    <span>Cart</span>
                </a>
            </li>
            <li>
                <a href="wishlist.html">
                    <i data-feather="heart"></i>
                    <span>Wishlist</span>
                </a>
            </li>
            <li>
                <a href="user-dashboard.html">
                    <i data-feather="user"></i>
                    <span>Account</span>
                </a>
            </li>
        </ul>
    </div>
    <!-- mobile fix menu end -->

    @inertia

    <!-- tap to top Section Start -->
    <div class="tap-to-top">
        <a href="#home">
            <i class="fas fa-chevron-up"></i>
        </a>
    </div>
    <!-- tap to top Section End -->

    <div class="bg-overlay"></div>
    <!-- latest jquery-->
    <script src="{{asset('theme/js/jquery-3.5.1.min.js')}}"></script>

    <!-- Bootstrap js-->
    <script src="{{asset('theme/js/bootstrap/bootstrap.bundle.min.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('theme/js/feather/feather.min.js')}}"></script>

    <!-- lazyload js-->
    <script src="{{asset('theme/js/lazysizes.min.js')}}"></script>

    <!-- Slick js-->
    <script src="{{asset('theme/js/slick/slick.js')}}"></script>
    <script src="{{asset('theme/js/slick/slick-animation.min.js')}}"></script>
    <script src="{{asset('theme/js/slick/custom_slick.js')}}"></script>

    <!-- newsletter js -->
    <script src="{{asset('theme/js/newsletter.js')}}"></script>

    <!-- add to cart modal resize -->
    <script src="{{asset('theme/js/cart_modal_resize.js')}}"></script>

    <!-- Add To Home js -->
    <script src="{{asset('theme/js/pwa.js')}}"></script>

    <!-- add to cart modal resize -->
    <script src="{{asset('theme/js/cart_modal_resize.js')}}"></script>

    <!-- feather icon js-->
    <script src="{{asset('theme/js/timer1.js')}}"></script>

    <!-- notify js -->
    <script src="{{asset('theme/js/bootstrap/bootstrap-notify.min.js')}}"></script>

    <!-- script js -->
    <script src="{{asset('theme/js/theme-setting.js')}}"></script>
    <script src="{{asset('theme/js/script.js')}}"></script>

</body>
</html>