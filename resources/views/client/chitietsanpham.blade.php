@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!--== Start: Page Banner Section ==-->
        <div class="page-banner-section" data-bg-img="assets/images/photos/bg3.jpg">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Product Details</li>
                </ul>
            </div>
        </div>
        <!--== End: Page Banner Section ==-->


        <!--== Start Product Detail Area Wrapper ==-->
        <div class="product-details-section section-padding">
            <div class="container">
                <!-- Single Product Top Area Start -->
                <div class="row row-cols-lg-2 row-cols-1 mb-n8">

                    <!-- Product Image Start -->
                    <div class="col mb-4 mb-8">
                        <div class="single-product-image">

                            <!-- Product Image Slider Start -->
                            <div class="product-image-slider swiper">
                                <!-- Product Badge Start -->
                                <div class="single-product-badge-left">
                                    <span class="single-product-badge-new">new</span>
                                </div>
                                <div class="single-product-badge-right">
                                    <span class="single-product-badge-sale">sale</span>
                                    <span class="single-product-badge-sale">-11%</span>
                                </div>
                                <!-- Product Badge End -->
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide image-zoom"><img src="../../../../../../public/assets/images/product/single/single-product-1.jpg" width="700" height="800" alt="Image-HasTech"></div>
                                    <div class="swiper-slide image-zoom"><img src="../../../../../../public/assets/images/product/single/single-product-2.jpg" width="700" height="800" alt="Image-HasTech"></div>
                                    <div class="swiper-slide image-zoom"><img src="../../../../../../public/assets/images/product/single/single-product-3.jpg" width="700" height="800" alt="Image-HasTech"></div>
                                    <div class="swiper-slide image-zoom"><img src="../../../../../../public/assets/images/product/single/single-product-4.jpg" width="700" height="800" alt="Image-HasTech"></div>
                                    <div class="swiper-slide image-zoom"><img src="../../../../../../public/assets/images/product/single/single-product-5.jpg" width="700" height="800" alt="Image-HasTech"></div>
                                </div>
                                <div class="swiper-pagination d-none"></div>
                                <div class="swiper-button-prev d-none"></div>
                                <div class="swiper-button-next d-none"></div>
                            </div>
                            <!-- Product Image Slider End -->

                            <!-- Product Thumbnail Carousel Start -->
                            <div class="product-thumb-carousel swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide"><img src="../../../../../../public/assets/images/product/single/single-product-thumb-1.jpg" alt="Image-HasTech"></div>
                                    <div class="swiper-slide"><img src="../../../../../../public/assets/images/product/single/single-product-thumb-2.jpg" alt="Image-HasTech"></div>
                                    <div class="swiper-slide"><img src="../../../../../../public/assets/images/product/single/single-product-thumb-3.jpg" alt="Image-HasTech"></div>
                                    <div class="swiper-slide"><img src="../../../../../../public/assets/images/product/single/single-product-thumb-4.jpg" alt="Image-HasTech"></div>
                                    <div class="swiper-slide"><img src="../../../../../../public/assets/images/product/single/single-product-thumb-5.jpg" alt="Image-HasTech"></div>
                                </div>
                                <div class="swiper-pagination d-none"></div>
                                <div class="swiper-button-prev"></div>
                                <div class="swiper-button-next"></div>
                            </div>
                            <!-- Product Thumbnail Carousel End -->

                        </div>
                    </div>
                    <!-- Product Image End -->

                    <!-- Product Content Start -->
                    <div class="col mb-4 mb-8">
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
                                            <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-s" checked><label for="size-s">s</label></div>
                                            <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-m"><label for="size-m">m</label></div>
                                            <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-l"><label for="size-l">l</label></div>
                                            <div class="single-product-variation-size-item"><input type="radio" name="size" id="size-xl"><label for="size-xl">xl</label></div>
                                        </div>
                                    </div>
                                </li>
                                <li><span class="label">Color :</span>
                                    <div class="value">
                                        <div class="single-product-variation-color-wrap">
                                            <div class="single-product-variation-color-item"><input type="radio" name="color" id="color-purple" checked><label for="color-purple" style="background-color: purple;">purple</label></div>
                                            <div class="single-product-variation-color-item"><input type="radio" name="color" id="color-violet"><label for="color-violet" style="background-color: violet;">violet</label></div>
                                            <div class="single-product-variation-color-item"><input type="radio" name="color" id="color-black"><label for="color-black" style="background-color: black;">black</label></div>
                                            <div class="single-product-variation-color-item"><input type="radio" name="color" id="color-pink"><label for="color-pink" style="background-color: pink;">pink</label></div>
                                            <div class="single-product-variation-color-item"><input type="radio" name="color" id="color-orange"><label for="color-orange" style="background-color: orange;">orange</label></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <div class="single-product-additional-information">
                                <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-size-guide"><i class="icon-equalizer"></i> Size Guide</button>
                                <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-shipping-policy"><i class="icon-plane"></i> Shipping</button>
                                <button class="single-product-info-btn" data-bs-toggle="modal" data-bs-target="product-enquiry"><i class="icon-envelope"></i> Ask About This product</button>
                            </div>
                            <div class="single-product-actions">
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
                            <ul class="single-product-meta">
                                <li><span class="label">Categories:</span> <span class="value links">
                    <a href="product.html">Accessories</a>
                    <a href="product.html">Deal Collections</a>
                    <a href="product.html">New Products</a>
                    <a href="product.html">Upsell Products</a>
                  </span></li>
                                <li><span class="label">Tags :</span> <span class="value links">
                    <a href="product.html">black</a>
                    <a href="product.html">fiber</a>
                    <a href="product.html">leather</a>
                  </span></li>
                                <li><span class="label">Share :</span> <span class="value social">
                    <a href="#/"><img src="../../../../../../public/assets/images/icons/facebook.png" width="24" height="24" alt="facebook"></a>
                    <a href="#/"><img src="../../../../../../public/assets/images/icons/twitter.png" width="24" height="24" alt="twitter"></a>
                    <a href="#/"><img src="../../../../../../public/assets/images/icons/pinterest.png" width="24" height="24" alt="pinterest"></a>
                  </span></li>
                            </ul>
                            <div class="single-product-safe-payment">
                                <p>Guaranteed safe checkout</p>
                                <a href="login.html"><img src="../../../../../../public/assets/images/photos/card.png" width="311" height="30" alt="payment"></a>
                            </div>
                        </div>
                    </div>
                    <!-- Product Content End -->

                </div>
                <!-- Single Product Top Area End -->

                <!-- Single Product Bottom (Description) Area Start -->
                <div class="single-product-description-area">
                    <div class="nav single-product-description-area-nav">
                        <button class="active" data-bs-toggle="tab" data-bs-target="#product-description">Description</button>
                        <button data-bs-toggle="tab" data-bs-target="#product-comments">Comments</button>
                        <button data-bs-toggle="tab" data-bs-target="#product-reviews">Reviews</button>
                        <button data-bs-toggle="tab" data-bs-target="#product-size-chart">Size Chart</button>
                        <button data-bs-toggle="tab" data-bs-target="#product-shipping-policy">Shipping Policy</button>
                    </div>
                    <div class="tab-content">
                        <!-- Description Start -->
                        <div class="tab-pane fade show active" id="product-description">
                            <div class="single-product-description">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.</p>
                                <p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham..</p>
                            </div>
                        </div>
                        <!-- Description End -->

                        <!-- Comments Start -->
                        <div class="tab-pane fade" id="product-comments">
                            <div class="block-title-2">
                                <h4 class="title mb-4 fw-medium">Comments (2)</h4>
                            </div>

                            <!-- Comment List Start -->
                            <ul class="comment-list">
                                <li>
                                    <div class="comment-item">
                                        <div class="comment-thumb"><img src="../../../../../../public/assets/images/photos/client1.png" width="100" height="98" alt="Image-HasTech"></div>
                                        <div class="comment-content">
                                            <div class="comment-meta">
                                                <h5 class="comment-name">Edna Watson</h5>
                                                <span class="comment-date">November 27, 2023</span>
                                            </div>
                                            <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                            <a href="#" class="comment-reply">Reply</a>
                                        </div>
                                    </div>
                                    <ul class="comment-child">
                                        <li>
                                            <div class="comment-item">
                                                <div class="comment-thumb"><img src="../../../../../../public/assets/images/photos/client2.png" width="100" height="98" alt="Image-HasTech"></div>
                                                <div class="comment-content">
                                                    <div class="comment-meta">
                                                        <h5 class="comment-name">Hester Perkins</h5>
                                                        <span class="comment-date">November 27, 2023</span>
                                                    </div>
                                                    <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                                    <a href="#" class="comment-reply">Reply</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <!-- Comment List End -->

                            <div class="block-title-2">
                                <h4 class="title mb-4 fw-medium">Leave your thought here</h4>
                            </div>

                            <!-- Comment Form Start -->
                            <div class="comment-form">
                                <form action="#">
                                    <div class="row g-4">
                                        <div class="col-sm-6">
                                            <label for="comment-name">Name</label>
                                            <input class="form-field" id="comment-name" name="name" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="comment-email">Email</label>
                                            <input class="form-field" id="comment-email" name="email" type="email" placeholder="john.smith@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="comment-message">Message</label>
                                            <textarea class="form-field" id="comment-message" name="message" placeholder="Write your messages here"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn fw-medium" value="Submit">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Comment Form End -->
                        </div>
                        <!-- Comments End -->

                        <!-- Reviews Start -->
                        <div class="tab-pane fade" id="product-reviews">

                            <div class="block-title-2">
                                <h4 class="title fw-medium mb-4">Customer Reviews</h4>
                            </div>

                            <!-- Review List Start -->
                            <div class="review-list">
                                <div class="review-item">
                                    <div class="review-thumb"><img src="../../../../../../public/assets/images/photos/client1.png" alt="Image-HasTech"></div>
                                    <div class="review-content">
                                        <div class="review-rating">
                                            <span class="review-rating-bg"><span class="review-rating-active" style="width: 90%"></span></span>
                                        </div>
                                        <div class="review-meta">
                                            <h5 class="review-name">Edna Watson</h5>
                                            <span class="review-date">November 27, 2023</span>
                                        </div>
                                        <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    </div>
                                </div>
                                <div class="review-item">
                                    <div class="review-thumb"><img src="../../../../../../public/assets/images/photos/client2.png" alt="Image-HasTech"></div>
                                    <div class="review-content">
                                        <div class="review-rating">
                                            <span class="review-rating-bg"><span class="review-rating-active" style="width: 100%"></span></span>
                                        </div>
                                        <div class="review-meta">
                                            <h5 class="review-name">Hester Perkins</h5>
                                            <span class="review-date">November 27, 2023</span>
                                        </div>
                                        <p>Thanks for always keeping your WordPress themes up to date. Your level of support and dedication is second to none.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Review List End -->

                            <div class="block-title-2">
                                <h4 class="title fw-medium mb-4">Write a review</h4>
                            </div>

                            <!-- Review Form Start -->
                            <div class="review-form">
                                <form action="#">
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <label for="review-rating">Rating</label>
                                            <select class="form-field" name="rating" id="review-rating">
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                                <option value="4">Four</option>
                                                <option value="5">Five</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="review-name">Name</label>
                                            <input class="form-field" id="review-name" name="name" type="text" placeholder="Enter your name">
                                        </div>
                                        <div class="col-sm-6">
                                            <label for="review-email">Email</label>
                                            <input class="form-field" id="review-email" name="email" type="email" placeholder="john.smith@example.com">
                                        </div>
                                        <div class="col-12">
                                            <label for="review-comment">Body of Review (1500)</label>
                                            <textarea class="form-field" id="review-comment" name="comment" placeholder="Write your comments here"></textarea>
                                        </div>
                                        <div class="col-12">
                                            <input type="submit" class="btn fw-medium" value="Submit Review">
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Review Form End -->

                        </div>
                        <!-- Reviews End -->

                        <!-- Size Chart Start -->
                        <div class="tab-pane fade" id="product-size-chart">
                            <table class="table table-bordered mb-0">
                                <tbody>
                                <tr>
                                    <td class="cun-name"><span>UK</span></td>
                                    <td>18</td>
                                    <td>20</td>
                                    <td>22</td>
                                    <td>24</td>
                                    <td>26</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>European</span></td>
                                    <td>46</td>
                                    <td>48</td>
                                    <td>50</td>
                                    <td>52</td>
                                    <td>54</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>usa</span></td>
                                    <td>14</td>
                                    <td>16</td>
                                    <td>18</td>
                                    <td>20</td>
                                    <td>22</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>Australia</span></td>
                                    <td>28</td>
                                    <td>10</td>
                                    <td>12</td>
                                    <td>14</td>
                                    <td>16</td>
                                </tr>
                                <tr>
                                    <td class="cun-name"><span>Canada</span></td>
                                    <td>24</td>
                                    <td>18</td>
                                    <td>14</td>
                                    <td>42</td>
                                    <td>36</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- Size Chart End -->

                        <!-- Shipping Policy Start -->
                        <div class="tab-pane product-shipping-policy fade" id="product-shipping-policy">
                            <div class="block-title-2">
                                <h4 class="title fw-medium mb-4">Shipping policy of our store</h4>
                            </div>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate</p>
                            <ul>
                                <li>1-2 business days (Typically by end of day)</li>
                                <li>30 days money back guaranty</li>
                                <li>24/7 live support</li>
                                <li>odio dignissim qui blandit praesent</li>
                                <li>luptatum zzril delenit augue duis dolore</li>
                                <li>te feugait nulla facilisi.</li>
                            </ul>
                            <p>Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non habent claritatem insitam; est usus legentis in iis qui facit eorum</p>
                            <p>claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                            <p>seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                        </div>
                        <!-- Shipping Policy End -->

                    </div>
                </div>
                <!-- Single Product Bottom (Description) Area End -->
            </div>
        </div>
        <!--== End Product Detail Area Wrapper ==-->


        <!--== Start: Product Area Wrapper ==-->
        <div class="product-section section-padding-b">
            <div class="container">
                <!--== Start: Section Title ==-->
                <div class="section-title2 text-center mt-n2">
                    <h6 class="sub-title">Popular Item</h6>
                    <h2 class="title">Related Products</h2>
                </div>
                <!--== End: Section Title ==-->

                <div class="row mb-n2">
                    <div class="col-12 swiper-button-wrap">
                        <div class="swiper product-slider2-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb product-tab">
                                            <a class="d-block" href="product-details.html">
                                                <div class="tab-content" id="productTabContent3">
                                                    <div class="tab-pane fade show active" id="product9" role="tabpanel" aria-labelledby="product9-tab">
                                                        <img src="../../../../../../public/assets/images/product/3.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product10" role="tabpanel" aria-labelledby="product10-tab">
                                                        <img src="../../../../../../public/assets/images/product/2.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product11" role="tabpanel" aria-labelledby="product11-tab">
                                                        <img src="../../../../../../public/assets/images/product/4.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product12" role="tabpanel" aria-labelledby="product12-tab">
                                                        <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product13" role="tabpanel" aria-labelledby="product13-tab">
                                                        <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <ul class="nav product-image-swatch" id="productTabNav3" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="product9-tab" data-bs-toggle="tab" data-bs-target="#product9" type="button" role="tab" aria-controls="product9" aria-selected="true" data-bg-img="assets/images/product/s2.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product10-tab" data-bs-toggle="tab" data-bs-target="#product10" type="button" role="tab" aria-controls="product10" aria-selected="false" data-bg-img="assets/images/product/s1.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product11-tab" data-bs-toggle="tab" data-bs-target="#product11" type="button" role="tab" aria-controls="product11" aria-selected="false" data-bg-img="assets/images/product/s3.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product12-tab" data-bs-toggle="tab" data-bs-target="#product12" type="button" role="tab" aria-controls="product12" aria-selected="false" data-bg-img="assets/images/product/s4.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product13-tab" data-bs-toggle="tab" data-bs-target="#product13" type="button" role="tab" aria-controls="product13" aria-selected="false" data-bg-img="assets/images/product/s5.jpg"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">New badge product</a></h4>
                                            <div class="prices">
                                                <span class="price">$39.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag product-flag-left product-flag-new">New</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>s</span>
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>xl</span>
                                                </div>
                                                <ul class="color-categories">
                                                    <li class="red"></li>
                                                    <li class="green"></li>
                                                    <li class="blue"></li>
                                                    <li class="yellow "></li>
                                                    <li class="white"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Soldout product</a></h4>
                                            <div class="prices">
                                                <span class="price">$80.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/11.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag">Soldout</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Variable with sold out</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$29.00</span>
                                                <span class="price">$19.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <div class="tab-content" id="productTabContent4">
                                                    <div class="tab-pane fade show active" id="product14" role="tabpanel" aria-labelledby="product14-tab">
                                                        <img src="../../../../../../public/assets/images/product/12.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product15" role="tabpanel" aria-labelledby="product15-tab">
                                                        <img src="../../../../../../public/assets/images/product/15.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product16" role="tabpanel" aria-labelledby="product16-tab">
                                                        <img src="../../../../../../public/assets/images/product/14.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class="product-flag">Sale</span>
                                            <span class="product-flag product-flag2">-27%</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>s</span>
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>xl</span>
                                                </div>
                                                <ul class="nav product-image-swatch" id="productTabNav4" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="product14-tab" data-bs-toggle="tab" data-bs-target="#product14" type="button" role="tab" aria-controls="product14" aria-selected="true" data-bg-img="assets/images/product/s6.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product15-tab" data-bs-toggle="tab" data-bs-target="#product15" type="button" role="tab" aria-controls="product15" aria-selected="false" data-bg-img="assets/images/product/s8.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product16-tab" data-bs-toggle="tab" data-bs-target="#product16" type="button" role="tab" aria-controls="product16" aria-selected="false" data-bg-img="assets/images/product/s7.jpg"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Unique content</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$75.00</span>
                                                <span class="price">$55.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb product-tab">
                                            <a class="d-block" href="product-details.html">
                                                <div class="tab-content" id="productTabContent5">
                                                    <div class="tab-pane fade show active" id="product17" role="tabpanel" aria-labelledby="product17-tab">
                                                        <img src="../../../../../../public/assets/images/product/4.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product18" role="tabpanel" aria-labelledby="product18-tab">
                                                        <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product19" role="tabpanel" aria-labelledby="product19-tab">
                                                        <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class="product-flag">Sale</span>
                                            <span class="product-flag product-flag2">-11%</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <ul class="nav product-image-swatch" id="productTabNav5" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="product17-tab" data-bs-toggle="tab" data-bs-target="#product17" type="button" role="tab" aria-controls="product17" aria-selected="true" data-bg-img="assets/images/product/s3.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product18-tab" data-bs-toggle="tab" data-bs-target="#product18" type="button" role="tab" aria-controls="product18" aria-selected="false" data-bg-img="assets/images/product/s4.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product19-tab" data-bs-toggle="tab" data-bs-target="#product19" type="button" role="tab" aria-controls="product19" aria-selected="false" data-bg-img="assets/images/product/s5.jpg"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Variable product</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$111.00</span>
                                                <span class="price">$99.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag product-flag">sale</span>
                                            <span class="product-flag product-flag2">-18%</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>s</span>
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>xl</span>
                                                </div>
                                                <ul class="color-categories">
                                                    <li class="blue"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Simple product</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$85.00</span>
                                                <span class="price">$70.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/13.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Sample affiliate product</a></h4>
                                            <div class="prices">
                                                <span class="price">$50.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide mb-2">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/14.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">New and sale badge</a></h4>
                                            <div class="prices">
                                                <span class="price">$29.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                            </div>
                        </div>
                        <!--== Add Arrows ==-->
                        <div class="swiper-button-st2 prev product2-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                        <div class="swiper-button-st2 next product2-swiper-button-next"><i class="icofont-thin-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End: Product Area Wrapper ==-->


        <!--== Start: Product Area Wrapper ==-->
        <div class="product-section section-padding-b">
            <div class="container">
                <!--== Start: Section Title ==-->
                <div class="section-title2 text-center mt-n2">
                    <h6 class="sub-title">Popular Item</h6>
                    <h2 class="title">Custom Collections</h2>
                </div>
                <!--== End: Section Title ==-->

                <div class="row">
                    <div class="col-12 swiper-button-wrap">
                        <div class="swiper product-slider-container">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/1.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag">Sale</span>
                                            <span class="product-flag product-flag2">-15%</span>
                                            <span class="product-flag product-flag-left product-flag-new">New</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>s</span>
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>xl</span>
                                                </div>
                                                <ul class="color-categories">
                                                    <li class="red"></li>
                                                    <li class="green"></li>
                                                    <li class="blue"></li>
                                                    <li class="yellow "></li>
                                                    <li class="white"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">New and sale badge</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$130.00</span>
                                                <span class="price">$110.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb product-tab">
                                            <a class="d-block" href="product-details.html">
                                                <div class="tab-content" id="productTabContent">
                                                    <div class="tab-pane fade show active" id="product1" role="tabpanel" aria-labelledby="product1-tab">
                                                        <img src="../../../../../../public/assets/images/product/2.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product2" role="tabpanel" aria-labelledby="product2-tab">
                                                        <img src="../../../../../../public/assets/images/product/3.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product3" role="tabpanel" aria-labelledby="product3-tab">
                                                        <img src="../../../../../../public/assets/images/product/4.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product4" role="tabpanel" aria-labelledby="product4-tab">
                                                        <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product5" role="tabpanel" aria-labelledby="product5-tab">
                                                        <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class="product-flag">Sale</span>
                                            <span class="product-flag product-flag2">-10%</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <ul class="nav product-image-swatch" id="productTabNav" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="product1-tab" data-bs-toggle="tab" data-bs-target="#product1" type="button" role="tab" aria-controls="product1" aria-selected="true" data-bg-img="assets/images/product/s1.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product2-tab" data-bs-toggle="tab" data-bs-target="#product2" type="button" role="tab" aria-controls="product2" aria-selected="false" data-bg-img="assets/images/product/s2.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product3-tab" data-bs-toggle="tab" data-bs-target="#product3" type="button" role="tab" aria-controls="product3" aria-selected="false" data-bg-img="assets/images/product/s3.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product4-tab" data-bs-toggle="tab" data-bs-target="#product4" type="button" role="tab" aria-controls="product4" aria-selected="false" data-bg-img="assets/images/product/s4.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product5-tab" data-bs-toggle="tab" data-bs-target="#product5" type="button" role="tab" aria-controls="product5" aria-selected="false" data-bg-img="assets/images/product/s5.jpg"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">This is the large title</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$21.00</span>
                                                <span class="price">$19.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <div class="tab-content" id="productTabContent2">
                                                    <div class="tab-pane fade show active" id="product6" role="tabpanel" aria-labelledby="product6-tab">
                                                        <img src="../../../../../../public/assets/images/product/4.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product7" role="tabpanel" aria-labelledby="product7-tab">
                                                        <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                    <div class="tab-pane fade" id="product8" role="tabpanel" aria-labelledby="product8-tab">
                                                        <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image">
                                                    </div>
                                                </div>
                                            </a>
                                            <span class="product-flag">Sale</span>
                                            <span class="product-flag product-flag2">-11%</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <ul class="nav product-image-swatch" id="productTabNav2" role="tablist">
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link active" id="product6-tab" data-bs-toggle="tab" data-bs-target="#product6" type="button" role="tab" aria-controls="product6" aria-selected="true" data-bg-img="assets/images/product/s3.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product7-tab" data-bs-toggle="tab" data-bs-target="#product7" type="button" role="tab" aria-controls="product7" aria-selected="false" data-bg-img="assets/images/product/s4.jpg"></button>
                                                    </li>
                                                    <li class="nav-item" role="presentation">
                                                        <button class="nav-link" id="product8-tab" data-bs-toggle="tab" data-bs-target="#product8" type="button" role="tab" aria-controls="product8" aria-selected="false" data-bg-img="assets/images/product/s5.jpg"></button>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Unique content</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$111.00</span>
                                                <span class="price">$99.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag product-flag-left product-flag-new">New</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>x</span>
                                                    <span>xxl</span>
                                                </div>
                                                <ul class="color-categories">
                                                    <li class="red"></li>
                                                    <li class="green"></li>
                                                    <li class="blue"></li>
                                                    <li class="yellow "></li>
                                                    <li class="white"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">New and sale badge</a></h4>
                                            <div class="prices">
                                                <span class="price">$80.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/7.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag product-flag-left product-flag-new">New</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>x</span>
                                                    <span>xxl</span>
                                                </div>
                                                <ul class="color-categories">
                                                    <li class="red"></li>
                                                    <li class="green"></li>
                                                    <li class="blue"></li>
                                                    <li class="yellow "></li>
                                                    <li class="white"></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Dummy product name</a></h4>
                                            <div class="prices">
                                                <span class="price">$80.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/8.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <span class="product-flag">Soldout</span>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Dummy product name</a></h4>
                                            <div class="prices">
                                                <span class="price-old">$29.00</span>
                                                <span class="price">$19.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/9.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Dummy product name</a></h4>
                                            <div class="prices">
                                                <span class="price">$29.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                                <div class="swiper-slide">
                                    <!--== Start: Product Item ==-->
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a class="d-block" href="product-details.html">
                                                <img src="../../../../../../public/assets/images/product/10.jpg" width="420" height="480" alt="Image-HasTech">
                                            </a>
                                            <div class="product-action-wrap">
                                                <div class="product-action">
                                                    <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                        <i class="icon-magnifier"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-bag"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="product-color-size-img-wrap">
                                                <div class="product-size-categories">
                                                    <span>s</span>
                                                    <span>m</span>
                                                    <span>l</span>
                                                    <span>xl</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <h4 class="product-title"><a href="product-details.html">Dummy product name</a></h4>
                                            <div class="prices">
                                                <span class="price">$79.00</span>
                                            </div>
                                            <div class="product-rating">
                                                    <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                                <span class="product-rating-icon">
                            <img src="../../../../../../public/assets/images/icons/star.svg" width="17" height="16" alt="Image">
                          </span>
                                            </div>
                                        </div>
                                    </div>
                                    <!--== End: prPduct Item ==-->
                                </div>
                            </div>
                        </div>
                        <!--== Add Arrows ==-->
                        <div class="swiper-button-st2 prev product-swiper-button-prev"><i class="icofont-thin-left"></i></div>
                        <div class="swiper-button-st2 next product-swiper-button-next"><i class="icofont-thin-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End: Product Area Wrapper ==-->
    </main>
@endsection
