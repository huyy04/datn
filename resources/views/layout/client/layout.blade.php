<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/droon/droon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 14:32:04 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Droon - Drone Shop Single Product template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="Droon - Drone Shop Single Product template" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="bootstrap ecommerce template" />
    <meta name="author" content="hastech" />

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ url('assets/images/favicon.png') }}">

    <!-- CSS (Font, Vendor, Icon, Plugins & Style CSS files) -->

    <!-- Font CSS -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&amp;family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="{{ asset('assets/css/vendor/bootstrap.min.css') }}">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/fancybox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/ion.rangeSlider.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/simple-line-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/plugins/swiper-bundle.min.css') }}">

    <!-- Style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

</head>

<body>

<!--== Start: Wrapper ==-->
<div class="wrapper">

    @include('layout.client.header')

    @yield('content')

    @include('layout.client.footer')
    <!--== Scroll Button ==-->
    <div id="scroll-to-top" class="scroll-to-top"><span class="icofont-rounded-up"></span></div>



    <!--== Start Product Quick View Modal ==-->
    <aside class="product-cart-view-modal modal fade" id="action-QuickViewModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="product-quick-view-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal"><span>×</span></button>
                        <div class="row gy-4 align-items-center">
                            <div class="col-lg-6 mb-8">
                                <div class="single-product-image">
                                    <!-- Product Badge Start -->
                                    <div class="single-product-badge-left">
                                        <span class="single-product-badge-new">new</span>
                                    </div>
                                    <div class="single-product-badge-right">
                                        <span class="single-product-badge-sale">sale</span>
                                        <span class="single-product-badge-sale">-11%</span>
                                    </div>
                                    <!-- Product Badge End -->
                                    <img src="{{ asset('assets/images/product/single/single-product-1.jpg') }}" width="700" height="800" alt="Image-HasTech">
                                </div>
                            </div>
                            <div class="col-lg-6 mb-8">
                                <div class="single-product-content">
                                    <h3 class="single-product-title">New and sale badge product</h3>
                                    <div class="single-product-price">$110.00 <del>$130.00</del></div>
                                    <ul class="single-product-meta">
                                        <li><span class="label">SKU:</span> <span class="value">1110</span></li>
                                        <li><span class="label">Vendor:</span> <span class="value">Vendor 3</span></li>
                                        <li><span class="label">Type:</span> <span class="value">Type 3</span></li>
                                        <li><span class="label">Availability:</span> <span class="value">11 Left in Stock</span></li>
                                    </ul>
                                    <div class="single-product-text">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                                    </div>
                                    <ul class="single-product-variations">
                                        <li><span class="label">Size :</span>
                                            <div class="value">
                                                <div class="single-product-variation-size-wrap">
                                                    <div class="single-product-variation-size-item"><input type="radio" name="size" id="product-size-s" checked><label for="product-size-s">s</label></div>
                                                    <div class="single-product-variation-size-item"><input type="radio" name="size" id="product-size-m"><label for="product-size-m">m</label></div>
                                                    <div class="single-product-variation-size-item"><input type="radio" name="size" id="product-size-l"><label for="product-size-l">l</label></div>
                                                    <div class="single-product-variation-size-item"><input type="radio" name="size" id="product-size-xl"><label for="product-size-xl">xl</label></div>
                                                </div>
                                            </div>
                                        </li>
                                        <li><span class="label">Color :</span>
                                            <div class="value">
                                                <div class="single-product-variation-color-wrap">
                                                    <div class="single-product-variation-color-item"><input type="radio" name="color" id="product-color-purple" checked><label for="product-color-purple" style="background-color: purple;">purple</label></div>
                                                    <div class="single-product-variation-color-item"><input type="radio" name="color" id="product-color-violet"><label for="product-color-violet" style="background-color: violet;">violet</label></div>
                                                    <div class="single-product-variation-color-item"><input type="radio" name="color" id="product-color-black"><label for="product-color-black" style="background-color: black;">black</label></div>
                                                    <div class="single-product-variation-color-item"><input type="radio" name="color" id="product-color-pink"><label for="product-color-pink" style="background-color: pink;">pink</label></div>
                                                    <div class="single-product-variation-color-item"><input type="radio" name="color" id="product-color-orange"><label for="product-color-orange" style="background-color: orange;">orange</label></div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="single-product-actions mt-2">
                                        <div class="single-product-actions-item">
                                            <div class="product-quantity-count">
                                                <button class="dec qty-btn">-</button>
                                                <input class="product-quantity-box" type="text" name="quantity" value="1">
                                                <button class="inc qty-btn">+</button>
                                            </div>
                                        </div>
                                        <div class="single-product-actions-item"><button class="btn btn-cart">ADD TO CART</button></div>
                                        <div class="single-product-actions-item"><button class="btn btn-icon "><i class="icon-heart"></i></button></div>
                                        <div class="single-product-actions-item"><button class="btn btn-icon"><i class="icon-refresh"></i></button></div>
                                    </div>
                                    <div class="single-product-buy-now">
                                        <a href="#" class="btn btn-buy-now">Buy it Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick View Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="modal-action-product modal fade" id="action-CartAddModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-action-product-wrap">
                        <button type="button" class="modal-action-btn-close" data-bs-dismiss="modal">
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-action-thumb">
                            <img src="{{ asset('assets/images/product/1.jpg') }}" alt="Image" width="420" height="480">
                        </div>
                        <div class="modal-action-product-content">
                            <h4 class="product-name">This is the large title</h4>
                            <p class="text-add"><i class="icon-check"></i> Added to cart successfully!</p>
                            <div class="d-flex flex-wrap">
                                <a class="btn btn-light ms-1 ms-sm-0 mt-1 mt-sm-0" href="shopping-cart.html">View Cart</a>
                                <a class="btn btn-light ms-1 ms-sm-3 mt-1 mt-sm-0" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="modal-action-product modal fade" id="action-WishlistModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-action-product-wrap">
                        <button type="button" class="modal-action-btn-close" data-bs-dismiss="modal">
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-action-thumb">
                            <img src="{{ asset('assets/images/product/1.jpg') }}" alt="Image" width="420" height="480">
                        </div>
                        <div class="modal-action-product-content">
                            <h4 class="product-name">This is the large title</h4>
                            <p class="text-add"><i class="icon-check"></i> Added to wishlist successfully!</p>
                            <div class="d-flex flex-wrap">
                                <a class="btn btn-light ms-1 ms-sm-0 mt-1 mt-sm-0" href="wishlist.html">View Wishlist</a>
                                <a class="btn btn-light ms-1 ms-sm-3 mt-1 mt-sm-0" href="shopping-cart.html">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start Product Quick Add Cart Modal ==-->
    <aside class="modal-action-product modal fade" id="action-CompareModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-action-product-wrap">
                        <button type="button" class="modal-action-btn-close" data-bs-dismiss="modal">
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-action-thumb">
                            <img src="{{ asset('assets/images/product/1.jpg') }}" alt="Image" width="420" height="480">
                        </div>
                        <div class="modal-action-product-content">
                            <h4 class="product-name">This is the large title</h4>
                            <p class="text-add"><i class="icon-check"></i> Added to compare successfully!</p>
                            <div class="d-flex flex-wrap">
                                <a class="btn btn-light" href="compare.html">View Compare</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <!--== End Product Quick Add Cart Modal ==-->

    <!--== Start: Product Search Modal ==-->
    <div class="offcanvas offcanvas-end w-100 border-0 bg-transparent" id="offcanvas-search">
        <div class="offcanvas-body offcanvas-search-body d-flex align-items-center justify-content-center">
            <button type="button" class="btn-close offcanvas-search-close-btn text-white" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icofont-close-circled"></i></button>
            <div class="offcanvas-search-form">
                <form action="#">
                    <input type="search" name="q" placeholder="Search our store">
                    <button type="submit"><i class="icofont-search"></i></button>
                </form>
            </div>
        </div>
    </div>
    <!--== End: Product Search Modal ==-->

    <div class="offcanvas offcanvas-end" id="offcanvas-cart">
        <div class="offcanvas-header header-offcanvas-header">
            <h5>Shoping Cart</h5>
            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="icofont-close"></i></button>
        </div>
        <div class="offcanvas-body d-flex flex-column">
            <div class="header-cart-body">
                <div class="header-cart-products">
                    <div class="header-cart-product">
                        <div class="header-cart-product-thumb">
                            <a href="product-details.html" class="header-cart-product-image"><img src="{{ url('assets/images/product/cart/product-1.jpg') }}" alt="House Coffee Original" width="88" height="100"></a>
                            <button class="header-cart-product-remove"><i class="icon-close"></i></button>
                        </div>
                        <div class="header-cart-product-content">
                            <h5 class="header-cart-product-title"><a href="product-details.html">This is the large title</a></h5>
                            <span class="header-cart-product-quantity">1 x $110.00</span>
                        </div>
                    </div>
                    <div class="header-cart-product">
                        <div class="header-cart-product-thumb">
                            <a href="product-details.html" class="header-cart-product-image"><img src="{{ url('assets/images/product/cart/product-2.jpg') }}" alt="Medium Roast Ground Coffee" width="88" height="100"></a>
                            <button class="header-cart-product-remove"><i class="icon-close"></i></button>
                        </div>
                        <div class="header-cart-product-content">
                            <h5 class="header-cart-product-title"><a href="product-details.html">Unique content</a></h5>
                            <span class="header-cart-product-quantity">1 x $19.00</span>
                        </div>
                    </div>
                    <div class="header-cart-product">
                        <div class="header-cart-product-thumb">
                            <a href="product-details.html" class="header-cart-product-image"><img src="{{ url('assets/images/product/cart/product-3.jpg') }}" alt="Medium Roast Ground Coffee" width="88" height="100"></a>
                            <button class="header-cart-product-remove"><i class="icon-close"></i></button>
                        </div>
                        <div class="header-cart-product-content">
                            <h5 class="header-cart-product-title"><a href="product-details.html">New and sale badge</a></h5>
                            <span class="header-cart-product-quantity">1 x $19.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-cart-footer">
                <h4 class="header-cart-total">Total: <span>$129.00</span></h4>
                <div class="header-cart-buttons">
                    <a href="checkout.html" class="footer-cart-btn">CHECKOUT</a>
                    <a href="cart.html" class="footer-cart-btn">VIEW CART</a>
                </div>
            </div>
        </div>
    </div>

    <!--== Start: Aside Menu ==-->
    <aside class="off-canvas-wrapper offcanvas offcanvas-start" tabindex="-1" id="AsideOffcanvasMenu" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
            <h6 class="d-none" id="offcanvasExampleLabel">Aside Menu</h6>
            <button class="btn-menu-close" data-bs-dismiss="offcanvas" aria-label="Close">menu <i class="icofont-rounded-left"></i></button>
        </div>
        <div class="offcanvas-body">
            <div class="mobile-menu-action">
                <!-- Mobile Menu Start -->
                <div class="mobile-menu-items">
                    <ul class="nav-menu">
                        <li>
                            <a href="#">Home</a>
                            <ul class="mobile-sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Shop</a>

                            <ul class="mobile-sub-menu">
                                <li>
                                    <a href="#">Shop Grid Layout</a>

                                    <ul class="mobile-sub-menu">
                                        <li><a href="product.html">Shop Grid Left Sidebar</a></li>
                                        <li><a href="product-right-sidebar.html">Shop Grid Right Sidebar</a></li>
                                        <li><a href="product-3-column.html">Shop Grid 3 Column (no sidebar)</a></li>
                                        <li><a href="product-4-column.html">Shop Grid 4 Column (no sidebar)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Shop List Layout</a>

                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-list-left-sidebar.html">Shop List Left Sidebar</a></li>
                                        <li><a href="product-list-right-sidebar.html">Shop List Right Sidebar</a></li>
                                        <li><a href="product-list-no-sidebar.html">Shop List (no sidebar)</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Product Pages</a>

                                    <ul class="mobile-sub-menu">
                                        <li><a href="product-details.html">Product Details</a></li>
                                        <li><a href="product-details-sticky-content.html">Product Details Sticky Content</a></li>
                                        <li><a href="product-details-thumbnail-right.html">Product Details Right Thumbnail</a></li>
                                        <li><a href="product-details-gallery.html">Product Details Gallery</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Others</a>

                                    <ul class="mobile-sub-menu">
                                        <li><a href="shopping-cart.html">Shopping Cart</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Pages</a>

                            <ul class="mobile-sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#">Blog</a>

                            <ul class="mobile-sub-menu">
                                <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                <li><a href="blog.html">Blog No Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details-right-sidebar.html">Blog Details Right Sidebar</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <!-- Mobile Menu End -->
            </div>
            <div class="mobile-menu-social">
                <a href="#"><i class="icon-social-facebook"></i></a>
                <a href="#"><i class="icon-social-twitter"></i></a>
                <a href="#"><i class="icon-social-instagram"></i></a>
                <a href="#"><i class="icon-social-youtube"></i></a>
                <a href="#"><i class="icon-social-pinterest"></i></a>
            </div>
        </div>
    </aside>
    <!--== End: Aside Menu ==-->

</div>
<!--== End: Wrapper ==-->

<!-- JS Vendor, Plugins & Activation Script Files -->

<!-- Vendors JS -->
<script src="{{ asset('assets/js/vendor/modernizr-3.11.7.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/jquery-migrate-3.3.2.min.js') }}"></script>
<script src="{{ asset('assets/js/vendor/bootstrap.bundle.min.js') }}"></script>

<!-- Plugins JS -->
<script src="{{ asset('assets/js/plugins/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/fancybox.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.sticky-sidebar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/jquery.zoom.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/swiper-bundle.min.js') }}"></script>

<!-- Custom Main JS -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/droon/droon/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 06 Jul 2024 14:32:19 GMT -->
</html>
