@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Order #{{ $bill->id }}</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Order</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Order detail</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Order #{{ $bill->id }}</div>
                        </li>
                    </ul>
                </div>
                <!-- order-detail -->
                <div class="wg-order-detail">
                    <div class="left flex-grow">
                        <div class="wg-box mb-20">
                            <div class="wg-table table-order-detail">
                                <ul class="table-title flex items-center justify-between gap20 mb-24">
                                    <li>
                                        <div class="body-title">All item</div>
                                    </li>
                                    <li>
                                        <div class="dropdown default">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span class="body-title-2 flex items-center gap8">Sort<i class="h6 icon-chevron-down"></i></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a href="javascript:void(0);">Name</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Quantity</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">Price</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="flex flex-column">
                                    <ul class="flex flex-column">
                                        @if (!empty($bill->orderItems) && is_iterable($bill->orderItems))
                                            @foreach($bill->orderItems as $item)
                                                <li class="product-item gap14">
                                                    <div class="image no-bg">
                                                        <img src="{{ asset('images/products/' . $item->product->image) }}" alt="">
                                                    </div>
                                                    <div class="flex items-center justify-between gap40 flex-grow">
                                                        <div class="name">
                                                            <div class="text-tiny mb-1">Product name</div>
                                                            <a href="product-list.html" class="body-title-2">{{ $item->product->name }}</a>
                                                        </div>
                                                        <div class="name">
                                                            <div class="text-tiny mb-1">Quantity</div>
                                                            <div class="body-title-2">{{ $item->quantity }}</div>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @else
                                            <p>No order items found.</p>
                                        @endif
                                    </ul>

                            </div>
                        </div>
                        <div class="wg-box">
                            <div class="wg-table table-cart-totals">
                                <ul class="table-title flex mb-24">
                                    <li>
                                        <div class="body-title">Cart Totals</div>
                                    </li>
                                    <li>
                                        <div class="body-title">Price</div>
                                    </li>
                                </ul>
                                <ul class="flex flex-column gap14">
                                    <li class="cart-totals-item">
                                        <span class="body-text">Subtotal:</span>
                                        <span class="body-title-2">${{ $bill->total_price }}</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-text">Shipping:</span>
                                        <span class="body-title-2">${{ $bill->tien_ship }}</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-text">Tax (GST):</span>
                                        <span class="body-title-2">$5.00</span>
                                    </li>
                                    <li class="divider"></li>
                                    <li class="cart-totals-item">
                                        <span class="body-title">Total price:</span>
                                        <span class="body-title tf-color-1">${{ $bill->total_price + $bill->tien_ship }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Summary</div>
                            <div class="summary-item">
                                <div class="body-text">Order ID</div>
                                <div class="body-title-2">#{{ $bill->id }}</div>
                            </div>
                            <div class="summary-item">
                                <div class="body-text">Date</div>
                                <div class="body-title-2">{{ $bill->ngay_thanh_toan }}</div>
                            </div>
                            <div class="summary-item">
                                <div class="body-text">Total</div>
                                <div class="body-title-2 tf-color-1">${{ $bill->total_price + $bill->tien_ship }}</div>
                            </div>
                        </div>
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Shipping Address</div>
                            <div class="body-text">{{ $bill->address->address }}</div>
                        </div>
                        <div class="wg-box mb-20 gap10">
                            <div class="body-title">Payment Method</div>
                            <div class="body-text">{{ $bill->paymentMethod->method_name }}</div>
                        </div>
                        <div class="wg-box gap10">
                            <div class="body-title">Expected Date Of Delivery</div>
                            <div class="body-title-2 tf-color-2">{{ $bill->ngay_nhan }}</div>
                            <a class="tf-button style-1 w-full" href="order-tracking.html"><i class="icon-truck"></i>Track order</a>
                        </div>
                    </div>
                </div>
                <!-- /order-detail -->
            </div>
            <!-- /main-content-wrap -->
        </div>

        <!-- /main-content-wrap -->
        <!-- bottom-page -->
        <div class="bottom-page">
            <div class="body-text">Copyright © 2024 Remos. Design with</div>
            <i class="icon-heart"></i>
            <div class="body-text">by <a href="https://themeforest.net/user/themesflat/portfolio">Themesflat</a> All rights reserved.</div>
        </div>
        <!-- /bottom-page -->
    </div>
@endsection
