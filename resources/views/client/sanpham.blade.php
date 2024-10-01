@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!--== Start: Page Banner Section ==-->
        <div class="page-banner-section" data-bg-img="assets/images/photos/bg3.jpg">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li>Shop Grid Left Sidebar</li>
                </ul>
            </div>
        </div>
        <!--== End: Page Banner Section ==-->

        <!--== Start: Product Section ==-->
        <div class="product-section section-padding">
            <div class="container">
                <div class="row flex-lg-row-reverse mb-n8">
                    <div class="col-lg-9 mb-8">
                        <!--== Shop Top Bar Start ==-->
                        <div class="shop-top-bar">

                            <div class="shop-top-bar-item">
                                <label for="SortBy">Sort by :</label>
                                <select name="SortBy" id="SortBy">
                                    <option value="best-selling">Best Selling</option>
                                    <option value="manual">Featured</option>
                                    <option value="title-ascending">Alphabetically, A-Z</option>
                                    <option value="title-descending">Alphabetically, Z-A</option>
                                    <option value="price-ascending">Price, low to high</option>
                                    <option value="price-descending">Price, high to low</option>
                                    <option value="created-descending">Date, new to old</option>
                                    <option value="created-ascending">Date, old to new</option>
                                </select>
                            </div>

                            <div class="shop-top-bar-item">
                                <p>Showing 1 - 6 of 6 result</p>
                            </div>

                            <div class="shop-top-bar-item">
                                <label for="paginateBy">Show :</label>
                                <select name="paginateBy" id="paginateBy">
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12" selected>12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                    <option value="32">32</option>
                                    <option value="33">33</option>
                                    <option value="34">34</option>
                                    <option value="35">35</option>
                                    <option value="36">36</option>
                                    <option value="37">37</option>
                                    <option value="38">38</option>
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    <option value="43">43</option>
                                    <option value="44">44</option>
                                    <option value="45">45</option>
                                    <option value="46">46</option>
                                    <option value="47">47</option>
                                    <option value="48">48</option>
                                    <option value="49">49</option>
                                    <option value="50">50</option>
                                </select>
                            </div>

                            <div class="shop-top-bar-item">
                                <div class="nav list-grid-toggle">
                                    <button class="active" data-bs-toggle="tab" data-bs-target="#product-grid"><i class="icon-grid"></i></button>
                                    <button data-bs-toggle="tab" data-bs-target="#product-list"><i class="icon-menu"></i></button>
                                </div>
                            </div>

                        </div>
                        <!--== Shop Top Bar End ==-->


                        <div class="product-tab-content tab-content" id="shopProductTabContent">
                            <div class="tab-pane fade show active" id="product-grid">
                                <div class="row mb-n6">
                                    <div class="col-sm-6 col-xl-4 mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <div class="tab-content" id="productTabContent1">
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
                                                    <ul class="nav product-image-swatch" id="productTabNav1" role="tablist">
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
                                    <div class="col-sm-6 col-xl-4 mb-4">
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
                                    <div class="col-sm-6 col-xl-4 mb-4">
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
                                    <div class="col-sm-6 col-xl-4 mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <a class="d-block" href="product-details.html">
                                                    <div class="tab-content" id="productTabContent2">
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
                                                    <ul class="nav product-image-swatch" id="productTabNav2" role="tablist">
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
                                    <div class="col-sm-6 col-xl-4 mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <div class="tab-content" id="productTabContent3">
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
                                                    <ul class="nav product-image-swatch" id="productTabNav3" role="tablist">
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
                                    <div class="col-sm-6 col-xl-4 mb-4">
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
                                </div>
                            </div>
                            <div class="tab-pane fade" id="product-list">
                                <div class="row row-cols-md-1 row-cols-sm-2 row-cols-1 mb-n6">
                                    <div class="col mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item product-list">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <div class="tab-content" id="productTabContent4">
                                                        <div class="tab-pane fade show active" id="product50" role="tabpanel" aria-labelledby="product50-tab">
                                                            <img src="../../../../../../public/assets/images/product/3.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product51" role="tabpanel" aria-labelledby="product51-tab">
                                                            <img src="../../../../../../public/assets/images/product/2.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product52" role="tabpanel" aria-labelledby="product52-tab">
                                                            <img src="../../../../../../public/assets/images/product/4.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product53" role="tabpanel" aria-labelledby="product53-tab">
                                                            <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product54" role="tabpanel" aria-labelledby="product54-tab">
                                                            <img src="../../../../../../public/assets/images/product/6.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                    </div>
                                                </a>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                            <i class="icon-magnifier"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="product-color-size-img-wrap">
                                                    <ul class="nav product-image-swatch" id="productTabNav4" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="product50-tab" data-bs-toggle="tab" data-bs-target="#product50" type="button" role="tab" aria-controls="product50" aria-selected="true" data-bg-img="assets/images/product/s2.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product51-tab" data-bs-toggle="tab" data-bs-target="#product51" type="button" role="tab" aria-controls="product51" aria-selected="false" data-bg-img="assets/images/product/s1.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product52-tab" data-bs-toggle="tab" data-bs-target="#product52" type="button" role="tab" aria-controls="product52" aria-selected="false" data-bg-img="assets/images/product/s3.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product53-tab" data-bs-toggle="tab" data-bs-target="#product53" type="button" role="tab" aria-controls="product53" aria-selected="false" data-bg-img="assets/images/product/s4.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product54-tab" data-bs-toggle="tab" data-bs-target="#product54" type="button" role="tab" aria-controls="product54" aria-selected="false" data-bg-img="assets/images/product/s5.jpg"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="product-details.html">New badge product</a></h4>
                                                <p class="desc">As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many...</p>
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
                                                <div class="product-action position-static">
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> Add to Cart
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End: prPduct Item ==-->
                                    </div>
                                    <div class="col mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item product-list">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <img src="../../../../../../public/assets/images/product/5.jpg" width="420" height="480" alt="Image-HasTech">
                                                </a>
                                                <span class="product-flag product-flag-left product-flag-new">New</span>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                            <i class="icon-magnifier"></i>
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
                                                <p class="desc">As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many...</p>
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
                                                <div class="product-action position-static">
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> Add to Cart
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End: prPduct Item ==-->
                                    </div>
                                    <div class="col mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item product-list">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <img src="../../../../../../public/assets/images/product/11.jpg" width="420" height="480" alt="Image-HasTech">
                                                </a>
                                                <span class="product-flag">Soldout</span>
                                                <div class="product-action-wrap">
                                                    <div class="product-action">
                                                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                                            <i class="icon-magnifier"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="product-details.html">Variable with sold out</a></h4>
                                                <p class="desc">As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many...</p>
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
                                                <div class="product-action position-static">
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> Add to Cart
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End: prPduct Item ==-->
                                    </div>
                                    <div class="col mb-4">
                                        <!--== Start: Product Item ==-->
                                        <div class="product-item product-list">
                                            <div class="product-thumb product-tab">
                                                <a class="d-block" href="product-details.html">
                                                    <div class="tab-content" id="productTabContent5">
                                                        <div class="tab-pane fade show active" id="product55" role="tabpanel" aria-labelledby="product55-tab">
                                                            <img src="../../../../../../public/assets/images/product/12.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product56" role="tabpanel" aria-labelledby="product56-tab">
                                                            <img src="../../../../../../public/assets/images/product/15.jpg" width="420" height="480" alt="Image">
                                                        </div>
                                                        <div class="tab-pane fade" id="product57" role="tabpanel" aria-labelledby="product57-tab">
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
                                                    </div>
                                                </div>
                                                <div class="product-color-size-img-wrap">
                                                    <div class="product-size-categories">
                                                        <span>s</span>
                                                        <span>m</span>
                                                        <span>l</span>
                                                        <span>xl</span>
                                                    </div>
                                                    <ul class="nav product-image-swatch" id="productTabNav5" role="tablist">
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link active" id="product55-tab" data-bs-toggle="tab" data-bs-target="#product55" type="button" role="tab" aria-controls="product55" aria-selected="true" data-bg-img="assets/images/product/s6.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product56-tab" data-bs-toggle="tab" data-bs-target="#product56" type="button" role="tab" aria-controls="product56" aria-selected="false" data-bg-img="assets/images/product/s8.jpg"></button>
                                                        </li>
                                                        <li class="nav-item" role="presentation">
                                                            <button class="nav-link" id="product57-tab" data-bs-toggle="tab" data-bs-target="#product57" type="button" role="tab" aria-controls="product57" aria-selected="false" data-bg-img="assets/images/product/s7.jpg"></button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="product-info">
                                                <h4 class="product-title"><a href="product-details.html">Unique content</a></h4>
                                                <p class="desc">As opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many...</p>
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
                                                <div class="product-action position-static">
                                                    <button type="button" class="product-action-btn action-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                                                        <i class="icon-heart"></i>
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                                                        <i class="icon-basket-loaded"></i> Add to Cart
                                                    </button>
                                                    <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                                                        <i class="icon-refresh"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <!--== End: prPduct Item ==-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--== Shop Bottom Bar Start ==-->
                        <div class="shop-bottom-bar">
                            <ul class="pagination">
                                <li class="disabled"><a href="#prev"><i class="icon-arrow-left"></i></a></li>
                                <li><a class="active" href="#page=1">1</a></li>
                                <li><a href="#page=2">2</a></li>
                                <li><a href="#page=3">3</a></li>
                                <li><a href="#next"><i class="icon-arrow-right"></i></a></li>
                            </ul>
                        </div>
                        <!--== Shop Bottom Bar End ==-->
                    </div>
                    <div class="col-lg-3 mb-8">
                        <div class="accordion" id="accordionSidebar">
                            <!--== Sidebar Price Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button" data-bs-toggle="collapse" data-bs-target="#sidebarPrice">Price</button>
                                <div id="sidebarPrice" class="accordion-collapse collapse show">
                                    <div class="shop-sidebar-body accordion-body">
                                        <input type="text" id="price-range" />
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Price End ==-->

                            <!--== Sidebar Availability Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarAvailability">Availability</button>
                                <div id="sidebarAvailability" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="stock" id="in-stock">
                                            <label class="form-check-label" for="in-stock">In stock <span class="ms-auto">(23)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="stock" id="out-of-stock" checked>
                                            <label class="form-check-label" for="out-of-stock">Out of stock <span class="ms-auto">(12)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Availability End ==-->

                            <!--== Sidebar Product Type Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarProductType">Product Type</button>
                                <div id="sidebarProductType" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-1">
                                            <label class="form-check-label" for="type-1">Type 1 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-2">
                                            <label class="form-check-label" for="type-2">Type 2 <span class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-3">
                                            <label class="form-check-label" for="type-3">Type 3 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-4">
                                            <label class="form-check-label" for="type-4">Type 4 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-5">
                                            <label class="form-check-label" for="type-5">Type 5 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-6">
                                            <label class="form-check-label" for="type-6">Type 6 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-7">
                                            <label class="form-check-label" for="type-7">Type 7 <span class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-8">
                                            <label class="form-check-label" for="type-8">Type 8 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="type" id="type-9">
                                            <label class="form-check-label" for="type-9">Type 9 <span class="ms-auto">(2)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Product Type End ==-->

                            <!--== Sidebar Brand Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarBrand">Brand</button>
                                <div id="sidebarBrand" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-1">
                                            <label class="form-check-label" for="vendor-1">Vendor 1 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-2">
                                            <label class="form-check-label" for="vendor-2">Vendor 2 <span class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-3">
                                            <label class="form-check-label" for="vendor-3">Vendor 3 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-4">
                                            <label class="form-check-label" for="vendor-4">Vendor 4 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-5">
                                            <label class="form-check-label" for="vendor-5">Vendor 5 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-6">
                                            <label class="form-check-label" for="vendor-6">Vendor 6 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-7">
                                            <label class="form-check-label" for="vendor-7">Vendor 7 <span class="ms-auto">(3)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-8">
                                            <label class="form-check-label" for="vendor-8">Vendor 8 <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="vendor" id="vendor-9">
                                            <label class="form-check-label" for="vendor-9">Vendor 9 <span class="ms-auto">(2)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Brand End ==-->

                            <!--== Sidebar Color Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarColor">Color</button>
                                <div id="sidebarColor" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="black">
                                            <label class="form-check-label" for="black">Black <span class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="blue">
                                            <label class="form-check-label" for="blue">Blue <span class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="gold">
                                            <label class="form-check-label" for="gold">Gold <span class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="gray">
                                            <label class="form-check-label" for="gray">Gray <span class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="green">
                                            <label class="form-check-label" for="green">Green <span class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="magenta">
                                            <label class="form-check-label" for="magenta">Magenta <span class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="maroon">
                                            <label class="form-check-label" for="maroon">Maroon <span class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="navy">
                                            <label class="form-check-label" for="navy">Navy <span class="ms-auto">(5)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="orange">
                                            <label class="form-check-label" for="orange">Orange <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="pink">
                                            <label class="form-check-label" for="pink">Pink <span class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="purple">
                                            <label class="form-check-label" for="purple">Purple <span class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="red">
                                            <label class="form-check-label" for="red">Red <span class="ms-auto">(7)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="violet">
                                            <label class="form-check-label" for="violet">Violet <span class="ms-auto">(4)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="white">
                                            <label class="form-check-label" for="white">White <span class="ms-auto">(6)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="color" id="yellow">
                                            <label class="form-check-label" for="yellow">Yellow <span class="ms-auto">(4)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Color End ==-->

                            <!--== Sidebar Material Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarMaterial">Material</button>
                                <div id="sidebarMaterial" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="material" id="fiber">
                                            <label class="form-check-label" for="fiber">Fiber <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="material" id="leather">
                                            <label class="form-check-label" for="leather">Leather <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="material" id="metal">
                                            <label class="form-check-label" for="metal">Metal <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="material" id="resin">
                                            <label class="form-check-label" for="resin">Resin <span class="ms-auto">(2)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="material" id="slag">
                                            <label class="form-check-label" for="slag">Slag <span class="ms-auto">(2)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--== Sidebar Material End ==-->

                            <!--== Sidebar Size Start ==-->
                            <div class="accordion-item shop-sidebar-item">
                                <button class="shop-sidebar-toggle accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#sidebarSize">Size</button>
                                <div id="sidebarSize" class="accordion-collapse collapse">
                                    <div class="shop-sidebar-body accordion-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="s">
                                            <label class="form-check-label" for="s">S <span class="ms-auto">(8)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="m">
                                            <label class="form-check-label" for="m">M <span class="ms-auto">(11)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="l">
                                            <label class="form-check-label" for="l">L <span class="ms-auto">(11)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="xl">
                                            <label class="form-check-label" for="xl">XL <span class="ms-auto">(9)</span></label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" name="size" id="xxl">
                                            <label class="form-check-label" for="xxl">XXL <span class="ms-auto">(5)</span></label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Sidebar Size End ==-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--== End: Product Section ==-->
    </main>
@endsection
