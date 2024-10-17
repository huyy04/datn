<!--== Start: Header Wrapper ==-->
<div class="header sticky-header header-transparent">
    <div class="container-fluid container-1733">
        <div class="row align-items-center">
            <div class="col-6 col-xl-2 col-lg-2">
                <!--== Start: Logo ==-->
                <div class="header-logo">
                    <a href="index.html">
                        <img src="{{ url('assets/images/logo.png') }}" width="85" height="70" alt="logo">
                        <img class="light" src="{{ url('assets/images/logo.png') }}" width="85" height="70" alt="logo">
                    </a>
                </div>
                <!--== End: Logo ==-->
            </div>

            <div class="col-6 col-xl-8 col-lg-7 d-none d-lg-block">
                <!--== Start: Menu ==-->
                <nav class="main-menu justify-content-center position-relative">
                    <ul>
                        <li class="has-sub-menu">
                            <a href="index.html">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home One</a></li>
                                <li><a href="index-2.html">Home Two</a></li>
                                <li><a href="index-3.html">Home Three</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="product.html">Shop</a>
                            <!-- Nested Menu Removed for Brevity -->
                        </li>
                        <li class="has-sub-menu">
                            <a href="index.html">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                            </ul>
                        </li>
                        <li class="has-sub-menu">
                            <a href="blog.html">Blog</a>
                            <!-- Blog Sub-menu Removed for Brevity -->
                        </li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </nav>
                <!--== End: Menu ==-->
            </div>

            <div class="col-6 col-xl-2 col-lg-3">
                <div class="header-action justify-content-end">
                    <div class="header-action-item">
                        <button class="header-action-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-search">
                            <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-search fa-w-16 fa-2x">
                                <path fill="currentColor" d="M508.5 468.9L387.1 347.5c-2.3-2.3-5.3-3.5-8.5-3.5h-13.2c31.5-36.5 50.6-84 50.6-136C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c52 0 99.5-19.1 136-50.6v13.2c0 3.2 1.3 6.2 3.5 8.5l121.4 121.4c4.7 4.7 12.3 4.7 17 0l22.6-22.6c4.7-4.7 4.7-12.3 0-17zM208 368c-88.4 0-160-71.6-160-160S119.6 48 208 48s160 71.6 160 160-71.6 160-160 160z" class=""></path>
                            </svg>
                        </button>
                    </div>
                    <div class="header-action-item">
                        <button class="header-action-toggle" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-cart">
                            <i class="icofont-cart"><span class="count">3</span></i> <span class="amount">$57.00</span>
                        </button>
                    </div>
                    <div class="header-action-item dropdown">
                        <button class="header-action-toggle" type="button" data-bs-toggle="dropdown">
                            <i class="icofont-gear-alt"></i>
                        </button>
                        <div class="dropdown-menu header-dropdown-menu">
                            <h6 class="header-dropdown-menu-title">Account</h6>
                            <ul>
                                <!-- Hiển thị liên kết Login và Register nếu chưa đăng nhập -->
                                @guest
                                    <li>
                                        <a href="{{ route('admin.user.login') }}">Login</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('user.register') }}">Register</a>
                                    </li>
                                @endguest

                                <!-- Hiển thị Admin Dashboard nếu là Admin -->
                                @auth
                                    @if (Auth::user()->role == 2)
                                        <li>
                                            <a href="{{ route('admin.home') }}">Admin Dashboard</a>
                                        </li>
                                    @endif

                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            {{ Auth::user()->name }}
                                        </a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <div class="dropdown-menu">
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <button type="submit" class="dropdown-item">Logout</button>
                                            </form>
                                        </div>
                                    </li>
                                @endauth



                            </ul>
                        </div>

                    </div>
                    <div class="header-action-item d-flex d-lg-none">
                        <button class="header-action-toggle header-action-offcanvas-menu" type="button" data-bs-toggle="offcanvas" data-bs-target="#AsideOffcanvasMenu">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End: Header Wrapper ==-->
