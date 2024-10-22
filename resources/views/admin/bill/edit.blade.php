@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Bill Information</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Bills</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Bill Detail</div>
                        </li>
                    </ul>
                </div>
                <!-- bill-details -->
                <div class="wg-box">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('bill.update', $bill->id)}}" method="POST" enctype="multipart/form-data" class="form-new-product form-style-1">
                        @method('POST')
                        @csrf
                        <!-- Tên người nhận -->
                        <fieldset class="name">
                            <div class="body-title">Tên người nhận <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="text" name="name_nguoi_nhan" tabindex="0" aria-required="true" required="" value="{{old('name_nguoi_nhan', $bill->name_nguoi_nhan)}}">
                            <div>
                                @error('name_nguoi_nhan')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>

                        <!-- Tổng tiền -->
                        <fieldset class="name">
                            <div class="body-title">Tổng tiền <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="number" name="total_price" tabindex="0" aria-required="true" value="{{old('total_price', $bill->total_price)}}">
                            <div>
                                @error('total_price')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>

                        <!-- Tiền ship -->
                        <fieldset class="name">
                            <div class="body-title">Tiền ship <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="number" name="tien_ship" tabindex="0" aria-required="true" value="{{old('tien_ship', $bill->tien_ship)}}">
                            <div>
                                @error('tien_ship')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>

                        <!-- Ngày nhận -->
                        <fieldset class="name">
                            <div class="body-title">Ngày nhận <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="date" name="ngay_nhan" tabindex="0" aria-required="true" value="{{old('ngay_nhan', $bill->ngay_nhan)}}">
                            <div>
                                @error('ngay_nhan')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>

                        <!-- Trạng thái giao hàng -->
                        <fieldset class="status">
                            <div class="body-title">Trạng thái giao hàng <span class="tf-color-1"></span></div>
                            <fieldset class="Status mb-24">
                                <select name="status" >
                                    <option value="đang chờ xử lý" {{ old('status', $bill->status) == 'đang chờ xử lý' ? 'selected' : '' }}>Đang chờ xử lý</option>
                                    <option value="đang giao" {{ old('status', $bill->status) == 'đang giao' ? 'selected' : '' }}>Đang giao</option>
                                    <option value="đã giao" {{ old('status', $bill->status) == 'đã giao' ? 'selected' : '' }}>Đã giao</option>
                                    <option value="đã hủy" {{ old('status', $bill->status) == 'đã hủy' ? 'selected' : '' }}>Đã hủy</option>
                                </select>
                            </fieldset>
                        </fieldset>

                        <div class="bot">
                            <div></div>
                            <button class="tf-button w208" type="submit">Save</button>
                        </div>
                    </form>
                </div>
                <!-- /bill-details -->
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
