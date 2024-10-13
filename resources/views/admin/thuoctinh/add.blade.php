@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>them thuoc tinh</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href=""><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">Ecommerce</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Add product</div>
                        </li>
                    </ul>
                </div>
                <!-- form-add-product -->
                <form class="tf-section-2 form-add-product" action="{{ route('thuoc-tinh.store') }}" method="post">
                    @method('post')
                    @csrf
                        <div class="wg-box">
                            <div class="gap22 cols">
                                <fieldset class="category">
                                    <div class="body-title mb-10">San pham <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="product_id">
                                            @foreach($product as $pro)
                                                <option value="{{ $pro->id }}">{{ $pro->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="male">
                                    <div class="body-title mb-10">Mau sac <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="color_id">
                                            @foreach($objColor as $color)
                                                <option value="{{ $color->hex_color }}" style="background-color: {{ $color->hex_color }}; width: 100px;height: 30px;border-radius: 50%">{{ $color->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="male">
                                    <div class="body-title mb-10">Kich thuoc <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="size_id">
                                            @foreach($objSize as $size)
                                                <option value="{{ $size->id }}">{{ $size->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset class="male">
                                    <div class="body-title mb-10">Kich thuoc ram <span class="tf-color-1">*</span></div>
                                    <div class="select">
                                        <select class="" name="ram_size_id">
                                            @foreach($ram_size as $ram)
                                                <option value="{{ $ram->id }}">{{ $ram->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="cols gap10">
                                <button class="tf-button w-full"  type="submit">Them thuoc tinh</button>
                            </div>
                        </div>
                </form>
                <!-- /form-add-product -->
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
