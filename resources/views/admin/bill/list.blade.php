@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Order List</h3>
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
                            <div class="text-tiny">Order List</div>
                        </li>
                    </ul>
                </div>
                <!-- order-list -->
                <div class="wg-box">
                    <div class="wg-table table-all-category">
                        <ul class="table-title flex gap20 mb-14">
                            <!-- Các cột tiêu đề -->
                            <li><div class="body-title">Tên</div></li>
                            <li><div class="body-title">Phương thức thanh toán</div></li>
                            <li><div class="body-title">Địa chỉ</div></li>
                            <li><div class="body-title">Tổng giá</div></li>
                            <li><div class="body-title">Tên người nhận</div></li>
                            <li><div class="body-title">Tiền ship</div></li>
                            <li><div class="body-title">Ngày nhận</div></li>
                            <li><div class="body-title">Ngày thanh toán</div></li>
                            <li><div class="body-title">Phương thức giao hàng</div></li>
                            <li><div class="body-title">Trạng thái giao hàng</div></li>
                            <li><div class="body-title">Action</div></li>
                        </ul>

                        <!-- Vòng lặp hiển thị các hóa đơn -->
                        @foreach($bill as $key => $item)
                            <ul class="flex flex-column">
                                <li class="product-item gap14">
                                    <div class="flex items-center justify-between gap20 flex-grow">
                                        <!-- Các cột dữ liệu của hóa đơn -->
                                        <div class="body-text">{{$item->user->name}}</div>
                                        <div class="body-text">{{ $item->paymentMethod->payment_type }}</div>
                                        <div class="body-text">{{ $item->addresses->address }}</div>
                                        <div class="body-text">{{ $item->total_price }}</div>
                                        <div class="body-text">{{ $item->name_nguoi_nhan }}</div>
                                        <div class="body-text">{{ $item->tien_ship }}</div>
                                        <div class="body-text">{{ $item->ngay_nhan }}</div>
                                        <div class="body-text">{{ $item->ngay_thanh_toan }}</div>
                                        <div class="body-text">{{ $item->shipping_type }}</div>
                                        <div class="body-text">{{ $item->status }}</div>

                                        <div class="list-icon-function">
                                            <div class="item eye">
                                                <a href="{{ route('bill.show', $item->id) }}"><i class="icon-eye"></i></a>
                                            </div>
                                            <div class="item edit">
                                                <a href="{{ route('bill.edit', $item->id) }}"><i class="icon-edit-3"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        @endforeach
                    </div>
                    <div class="divider"></div>
                    <div class="flex items-center justify-between flex-wrap gap10">
                        <div class="text-tiny">Showing 10 entries</div>
                        <ul class="wg-pagination">
                            <li>
                                <a href="#"><i class="icon-chevron-left"></i></a>
                            </li>
                            <li>
                                <a href="#">1</a>
                            </li>
                            <li class="active">
                                <a href="#">2</a>
                            </li>
                            <li>
                                <a href="#">3</a>
                            </li>
                            <li>
                                <a href="#"><i class="icon-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /order-list -->
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
