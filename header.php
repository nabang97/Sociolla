<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Subash || Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="img/icon/favicon.png">

    <!-- All CSS Files -->
    <!-- Bootstrap fremwork main css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Nivo-slider css -->
    <link rel="stylesheet" href="lib/css/nivo-slider.css">
    <!-- This core.css file contents all plugings css file. -->
    <link rel="stylesheet" href="css/core.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Template color css -->
    <link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
    <!-- User style -->
    <link rel="stylesheet" href="css/custom.css">

    <!-- Modernizr JS -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <!-- Body main wrapper start -->
    <div class="wrapper">

        <!-- START HEADER AREA -->
        <header class="header-area header-wrapper">
            <!-- header-top-bar -->
            <div class="header-top-bar plr-185">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6 hidden-xs">
                            <div class="call-us">
                                <p class="mb-0 roboto">(+88) 01234-567890</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12">
                            <div class="top-link clearfix">
                                <ul class="link f-right">
                                    <li>
                                        <a href="#">
                                            <i class="zmdi zmdi-account"></i>
                                            <?php session_start() ?>
                                            <?php if (isset($_SESSION['auth'])): ?>
                                              <?= $_SESSION['auth']->username ?>
                                            <?php else: ?>
                                              My Account
                                            <?php endif; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="wishlist.html">
                                            <i class="zmdi zmdi-favorite"></i>
                                            Wish List (0)
                                        </a>
                                    </li>
                                    <li>
                                      <?php if (isset($_SESSION['auth'])): ?>
                                        <a href="_action/LogoutUser.php">
                                            <i class="zmdi zmdi-lock"></i>
                                            Logout
                                        </a>
                                      <?php else: ?>
                                        <a href="login.php">
                                            <i class="zmdi zmdi-lock"></i>
                                            Login
                                        </a>
                                      <?php endif; ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-middle-area -->
            <div id="sticky-header" class="header-middle-area plr-185">
                <div class="container-fluid">
                    <div class="full-width-mega-dropdown">
                        <div class="row">
                            <!-- logo -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo/sociolla-small.jpg" alt="main logo">
                                    </a>
                                </div>
                            </div>
                            <!-- primary-menu -->
                            <div class="col-md-8 hidden-sm hidden-xs">
                                <nav id="primary-menu">
                                    <ul class="main-menu text-center">
                                        <li><a href="index.html">SHOP BY CATEGORIES</a>
                                            <ul class="dropdwn">
                                                <li>
                                                    <a href="index.html">MAKEUP</a>
                                                </li>
                                                <li>
                                                    <a href="index-2.html">SKIN CARE</a>
                                                </li>
                                                <li>
                                                    <a href="index-3.html">HAIR CARE</a>
                                                </li>
                                                <li>
                                                    <a href="index-4.html">NAILS</a>
                                                </li>
                                                <li>
                                                    <a href="index-5.html">Bath & Body</a>
                                                </li>
                                                <li>
                                                    <a href="index-6.html">ACCESSORIES</a>
                                                </li>
                                                <li>
                                                    <a href="index-7.html">FRAGRANCE</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="mega-parent"><a href="#">elements</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link mega-menu-link-4  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 1</li>
                                                        <li>
                                                            <a href="elements-header-1-sticky.html">header-1-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-1-no-sticky.html">header-1-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-sticky.html">header-2-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-header-2-no-sticky.html">header-2-no-sticky</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-1.html">footer-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-2.html">footer-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-footer-3.html">footer-3</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-contact-form.html">Dynamic Contact Form</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-map.html">Google Map</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 2</li>
                                                        <li>
                                                            <a href="elements-featured-product-1.html">featured-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-featured-product-2.html">featured-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-1.html">product-tab-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-product-tab-2.html">product-tab-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-1.html">up-comming-product-1</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-up-comming-product-2.html">up-comming-product-2</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-single-product.html">single-product</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-left.html">sidebar-left</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-sidebar-right.html">sidebar-right</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 3</li>
                                                        <li>
                                                            <a href="elements-section-title.html">section-title</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-pagination.html">pagination</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-banner.html">Banner</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-brands.html">Brands</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-breadcrumbs.html">Breadcrumbs</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-newsletter.html">Newsletter</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-team.html">team</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-audio.html">Audio</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-video.html">Video</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Elements 4</li>
                                                        <li>
                                                            <a href="elements-typography.html">typography</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-buttons.html">Buttons</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-call-to-action.html">Call to Action</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-accordion.html">Accordion</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-alerts.html">Alerts</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-progress-bars.html">progress-bars</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-tab.html">tab</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                        <li>
                                                            <a href="elements-toggles.html">toggles</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="shop.html">Products</a>
                                            <div class="mega-menu-area clearfix">
                                                <div class="mega-menu-link f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Smart Phone</li>
                                                        <li>
                                                            <a href="#">All Mobile Phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Smart phones</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Android Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Windows Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Refurbished Mobiles</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">All Mobile Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="#">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Note Book</li>
                                                        <li>
                                                            <a href="">All Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart notebooks</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Note Book</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Note Books</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Note Books Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">Tablets</li>
                                                        <li>
                                                            <a href="">All Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Smart tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Android Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Windows Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Refurbished Tablets</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Tablets Accessories</a>
                                                        </li>
                                                        <li>
                                                            <a href="">Cases & Covers</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="mega-menu-photo f-left">
                                                    <a href="#">
                                                        <img src="img/mega-menu/1.jpg" alt="mega menu image">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mega-parent"><a href="#">Pages</a>
                                            <div class="mega-menu-area mega-menu-area-2 clearfix">
                                                <div class="mega-menu-link mega-menu-link-2  f-left">
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="shop.html">Shop</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-left-sidebar.html">Shop Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-right-sidebar.html">Shop Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list.html">Shop List</a>
                                                        </li>
                                                        <li>
                                                            <a href="shop-list-right-sidebar.html">Shop List Right Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product.html">Single Product</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-left-sidebar.html">Single Product Left Sidebar</a>
                                                        </li>
                                                        <li>
                                                            <a href="single-product-no-sidebar.html">Single Product No Sidebar</a>
                                                        </li>
                                                    </ul>
                                                    <ul class="single-mega-item">
                                                        <li class="menu-title">page list</li>
                                                        <li>
                                                            <a href="cart.html">Shopping Cart</a>
                                                        </li>
                                                        <li>
                                                            <a href="wishlist.html">Wishlist</a>
                                                        </li>
                                                        <li>
                                                            <a href="checkout.html">Checkout</a>
                                                        </li>
                                                        <li>
                                                            <a href="order.html">Order</a>
                                                        </li>
                                                        <li>
                                                            <a href="login.html">Login</a>
                                                        </li>
                                                        <li>
                                                            <a href="My-account.html">My Account</a>
                                                        </li>
                                                        <li>
                                                            <a href="about.html">About us</a>
                                                        </li>
                                                        <li>
                                                            <a href="404.html">404</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li><a href="blog.html">Blog</a>
                                            <ul class="dropdwn">
                                                <li>
                                                    <a href="blog.html">Blog</a>
                                                </li>
                                                <li>
                                                    <a href="blog-left-sidebar.html">Blog Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-right-sidebar.html">Blog Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2.html">Blog style 2</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-left-sidebar.html">Blog 2 Left Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-2-right-sidebar.html">Blog 2 Right Sidebar</a>
                                                </li>
                                                <li>
                                                    <a href="blog-details.html">Blog Details</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="about.html">About us</a>
                                        </li>
                                        <li>
                                            <a href="contact.html">Contact</a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- header-search & total-cart -->
                            <div class="col-md-2 col-sm-6 col-xs-12">
                                <div class="search-top-cart  f-right">
                                    <!-- header-search -->
                                    <div class="header-search f-left">
                                        <div class="header-search-inner">
                                           <button class="search-toggle">
                                            <i class="zmdi zmdi-search"></i>
                                           </button>
                                            <form action="#">
                                                <div class="top-search-box">
                                                    <input type="text" placeholder="Search here your product...">
                                                    <button type="submit">
                                                        <i class="zmdi zmdi-search"></i>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <!-- total-cart -->
                                    <div class="total-cart f-left">
                                        <div class="total-cart-in">
                                            <div class="cart-toggler">
                                                <a href="#">
                                                    <span class="cart-quantity">02</span><br>
                                                    <span class="cart-icon">
                                                        <i class="zmdi zmdi-shopping-cart-plus"></i>
                                                    </span>
                                                </a>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="top-cart-inner your-cart">
                                                        <h5 class="text-capitalize">Your Cart</h5>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="total-cart-pro">
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <!-- single-cart -->
                                                        <div class="single-cart clearfix">
                                                            <div class="cart-img f-left">
                                                                <a href="#">
                                                                    <img src="img/cart/1.jpg" alt="Cart Product" />
                                                                </a>
                                                                <div class="del-icon">
                                                                    <a href="#">
                                                                        <i class="zmdi zmdi-close"></i>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="cart-info f-left">
                                                                <h6 class="text-capitalize">
                                                                    <a href="#">Dummy Product Name</a>
                                                                </h6>
                                                                <p>
                                                                    <span>Brand <strong>:</strong></span>Brand Name
                                                                </p>
                                                                <p>
                                                                    <span>Model <strong>:</strong></span>Grand s2
                                                                </p>
                                                                <p>
                                                                    <span>Color <strong>:</strong></span>Black, White
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner subtotal">
                                                        <h4 class="text-uppercase g-font-2">
                                                            Total  =
                                                            <span>$ 500.00</span>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner view-cart">
                                                        <h4 class="text-uppercase">
                                                            <a href="#">View cart</a>
                                                        </h4>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="top-cart-inner check-out">
                                                        <h4 class="text-uppercase">
                                                            <a href="#">Check out</a>
                                                        </h4>
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
            </div>
        </header>
        <!-- END HEADER AREA -->
        <?php include('header-mobile.php') ?>
