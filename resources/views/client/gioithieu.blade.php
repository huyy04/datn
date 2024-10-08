@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!--== Start: Page Banner Section ==-->
        <div class="page-banner-section" data-bg-img="assets/images/photos/bg3.jpg">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>ABOUT US</li>
                </ul>
            </div>
        </div>
        <!--== End: Page Banner Section ==-->


        <!--== Start: About Section Wrapper ==-->
        <div class="about-section section-padding">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-6 mb-8">
                        <div class="about-thumb">
                            <img src="../../../../../../public/assets/images/photos/about2.jpg" width="500" height="574" alt="Image">
                        </div>
                    </div>
                    <div class="col-lg-6 mb-8">
                        <div class="about-content">
                            <h4 class="about-title"><span>DROON</span> ABOUT INFO</h4>
                            <p class="about-desc mb-lg-10 mb-5">A coffee shop is a small business that sells coffee, pastries, and other morning goods. There are many different types of coffee shops around the world. Some have a barista, while some just have a cashier.</p>

                            <h5 class="about-sub-title">WE START AT 2023</h5>
                            <p class="about-desc mb-lg-10 mb-5">Some coffee shops have a seating area, while some just have a spot to order and then go somewhere else to sit down. The coffee shop that I am going to describe is a place with a seating area and barista.</p>

                            <h5 class="about-sub-title">WIN BEST ONLINE SHOP AT 2023</h5>
                            <p class="about-desc">My goal for this coffee shop is to be able to get a coffee and get on with my day. It's a Thursday morning and I am rushing between meetings. I need to caffeinate, but don't have time to sit down at the cafe for fifteen minutes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End: About Section Wrapper ==-->


        <!--== Start: Testimonial Section Wrapper ==-->
        <div class="testimonial-section section-padding" data-bg-img="assets/images/photos/bg5.jpg">
            <div class="container">
                <!--== Start: Section Title ==-->
                <div class="section-title2 text-center mt-n2">
                    <h6 class="sub-title">WHAT HAPPENS HERE</h6>
                    <h2 class="title">What Clients Sayes</h2>
                </div>
                <!--== End: Section Title ==-->
                <div class="row justify-content-center swiper-button-wrap">
                    <div class="col-lg-10">
                        <div class="testimonial-slider swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="testimonial">
                                        <div class="testimonial-client-thumb">
                                            <img src="../../../../../../public/assets/images/testimonial/1.png" alt="Forster Hobs" width="100" height="100">
                                        </div>
                                        <div class="testimonial-text">
                                            <p>I've been drinking coffee for years and I can honestly say that coffee is the best product out there. Coffee has a perfect taste and it wakes me up in the morning. It's also really.affordable.</p>
                                        </div>
                                        <div class="testimonial-client-info">
                                            <h5 class="testimonial-client-name">Forster Hobs</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="testimonial">
                                        <div class="testimonial-client-thumb">
                                            <img src="../../../../../../public/assets/images/testimonial/2.png" alt="Hester Perkins" width="100" height="100">
                                        </div>
                                        <div class="testimonial-text">
                                            <p>What can I say about coffee? Coffee is coffee. It tastes good, wakes you up, and is less than $10 at most Starbucks. What else do you need?</p>
                                        </div>
                                        <div class="testimonial-client-info">
                                            <h5 class="testimonial-client-name">Hester Perkins</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Add Arrows ==-->
                    <div class="swiper-button-st2 prev testimonial-swiper-button-prev bg-white"><i class="icofont-thin-left"></i></div>
                    <div class="swiper-button-st2 next testimonial-swiper-button-next bg-white"><i class="icofont-thin-right"></i></div>
                </div>
            </div>
        </div>
        <!--== End: Testimonial Section Wrapper ==-->


        <!--== Start: Testimonial Section Wrapper ==-->
        <div class="testimonial-section section-padding">
            <div class="container">
                <!--== Start: Section Title ==-->
                <div class="section-title2 text-center mt-n2">
                    <h6 class="sub-title">EXPART TEAM</h6>
                    <h2 class="title">Meet Out Team</h2>
                </div>
                <!--== End: Section Title ==-->
                <div class="row swiper-button-wrap">
                    <div class="col-12">
                        <div class="team-carousel swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team-thumb">
                                            <img src="../../../../../../public/assets/images/team/1.jpg" alt="Image" width="500" height="700">
                                            <div class="team-social">
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="team-name">Mr. Mike Banding</h4>
                                            <p class="team-title">Manager</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team-thumb">
                                            <img src="../../../../../../public/assets/images/team/2.jpg" alt="Image" width="500" height="700">
                                            <div class="team-social">
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="team-name">Mr. Peter Pan</h4>
                                            <p class="team-title">Developer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team-thumb">
                                            <img src="../../../../../../public/assets/images/team/3.jpg" alt="Image" width="500" height="700">
                                            <div class="team-social">
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="team-name">Ms. Sophia</h4>
                                            <p class="team-title">Designer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team-thumb">
                                            <img src="../../../../../../public/assets/images/team/4.jpg" alt="Image" width="500" height="700">
                                            <div class="team-social">
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="team-name">Mr. John Lee</h4>
                                            <p class="team-title">Chairmen</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="team">
                                        <div class="team-thumb">
                                            <img src="../../../../../../public/assets/images/team/5.jpg" alt="Image" width="500" height="700">
                                            <div class="team-social">
                                                <a href="#"><i class="icon-social-facebook"></i></a>
                                                <a href="#"><i class="icon-social-twitter"></i></a>
                                                <a href="#"><i class="icon-social-instagram"></i></a>
                                            </div>
                                        </div>
                                        <div class="team-content">
                                            <h4 class="team-name">Mr. Mike Banding</h4>
                                            <p class="team-title">Manager</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== Add Arrows ==-->
                    <div class="swiper-button-st2 prev team-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                    <div class="swiper-button-st2 next team-swiper-button-next"><i class="icofont-thin-right"></i></div>
                </div>
            </div>
        </div>
        <!--== End: Testimonial Section Wrapper ==-->


        <!--== Start: Gallery Section Wrapper ==-->
        <div class="gallery-section section-padding-b">
            <div class="container-fluid container-1733">
                <!--== Start: Section Title ==-->
                <div class="section-title2 mb-12 text-center mt-n2">
                    <h6 class="sub-title">POPULAR ITEM</h6>
                    <h2 class="title">Specializing in Drone</h2>
                </div>
                <!--== End: Section Title ==-->
                <div class="row mb-n6">
                    <div class="col-12 swiper-button-wrap">
                        <div class="swiper gallery-slider-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-1.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-1.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-2.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-2.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-3.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-3.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-4.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-4.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-5.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-5.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-6.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-6.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-7.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-7.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                                <div class="swiper-slide">

                                    <!--== Start: Gallery Item ==-->
                                    <div class="gallery-item">
                                        <a href="product.html" class="gallery-image">
                                            <img class="w-100" src="../../../../../../public/assets/images/gallery/image-8.png" width="500" height="600" alt="Single Gallery Name">
                                        </a>
                                        <div class="gallery-content-wrap">
                                            <div class="gallery-content">
                                                <h4 class="gallery-title"><a href="product.html">Single Gallery Name</a></h4>
                                                <p class="gallery-desc">Droon</p>
                                            </div>
                                            <a class="gallery-popup" data-fancybox href="../../../../../../public/assets/images/gallery/image-8.jpg"><i class="icofont-ui-zoom-in"></i></a>
                                        </div>
                                    </div>
                                    <!--== End: Gallery Item ==-->

                                </div>
                            </div>
                        </div>
                        <!--== Add Arrows ==-->
                        <div class="swiper-button-st2 prev gallery-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                        <div class="swiper-button-st2 next gallery-swiper-button-next"><i class="icofont-thin-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End: Gallery Section Wrapper ==-->
    </main>
@endsection
