@extends('layout.admin.layout')
@section('content')
<<<<<<< HEAD
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Add Product</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
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
                <form class="tf-section-2 form-add-product" action="{{ route('store') }}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="wg-box">
                        <fieldset class="name">
                            <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter product name" name="name" tabindex="0" value="" aria-required="true" >
                            @error('name')
                                <div style="color: red">
                                    {{ $message }}
                                </div>
                            @enderror
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                            <input class="mb-10" type="text" placeholder="Enter product name" name="price" tabindex="0" value="" aria-required="true" >
                            @error('price')
=======
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Add Product</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
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
            <form class="tf-section-2 form-add-product" action="{{ route('san-pham.store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Product name <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="name" tabindex="0" value="" aria-required="true" >
                        @error('name')
>>>>>>> huy04
                            <div style="color: red">
                                {{ $message }}
                            </div>
                        @enderror
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title mb-10">Price <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="price" tabindex="0" value="" aria-required="true" >
                        @error('price')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title mb-10">Quantity <span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="ton_kho" tabindex="0" value="" aria-required="true" >
                        @error('ton_kho')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </fieldset>
                    <div class="gap22 cols">
                        <fieldset class="category">
                            <div class="body-title mb-10">Category <span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select class="" name="category_id">
                                    @foreach($category as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                        <fieldset class="male">
                            <div class="body-title mb-10">Brand <span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select class="" name="brand_id">
                                    @foreach($brand as $value)
                                        <option value="{{ $value->id }}">{{ $value->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </fieldset>
                    </div>
                    <fieldset class="description">
                        <div class="body-title mb-10">Description <span class="tf-color-1">*</span></div>
                        <textarea class="mb-10" name="description" placeholder="Description" tabindex="0" aria-required="true" ></textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                        @error('description')
                        <div style="color: red">
                            {{ $message }}
                        </div>
                        @enderror
                    </fieldset>
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title mb-10">Upload images</div>
                        <div class="upload-image mb-16">
                            <div class="item">
                                <img src="images/upload/upload-1.png" alt="">
                            </div>
                            <div class="item">
                                <img src="images/upload/upload-2.png" alt="">
                            </div>
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                                    <span class="icon">
                                                        <i class="icon-upload-cloud"></i>
                                                    </span>
                                    <span class="text-tiny">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="image">
                                </label>
                            </div>
                        </div>
                        <div class="body-text">You need to add at least 4 images. Pay attention to the quality of the pictures you add, comply with the background color standards. Pictures must be in certain dimensions. Notice that the product shows all the details</div>
                    </fieldset>
{{--                        <div class="cols gap22">--}}
{{--                            <fieldset class="name">--}}
{{--                                <div class="body-title mb-10">Add size</div>--}}
{{--                                <div class="select mb-10">--}}
{{--                                    <select class="variants[0][size_id]">--}}
{{--                                        @foreach($size as $value)--}}
{{--                                            <option value="{{ $value->id }}">{{ $value->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="body-title mb-10">Add Ram</div>--}}
{{--                                <div class="select mb-10">--}}
{{--                                    <select class="" name="variants[0][ram_size_id]">--}}
{{--                                        @foreach($size_ram as $value)--}}
{{--                                            <option value="{{ $value->id }}">{{ $value->name }}</option>--}}
{{--                                        @endforeach--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <fieldset class="name">--}}
{{--                                    <div class="body-title mb-10">Color<span class="tf-color-1">*</span></div>--}}
{{--                                    <input class="mb-10" type="color"  name="variants[0][color_id]" tabindex="0" value="" aria-required="true" >--}}
{{--                                    @error('name')--}}
{{--                                    <div style="color: red">--}}
{{--                                        {{ $message }}--}}
{{--                                    </div>--}}
{{--                                    @enderror--}}
{{--                                </fieldset>--}}
{{--                                <div class="list-box-value mb-10">--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 38.5</div></div>--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 39</div></div>--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 40</div></div>--}}
{{--                                </div>--}}
{{--                                <div class="list-box-value">--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 41.5</div></div>--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 42</div></div>--}}
{{--                                    <div class="box-value-item"><div class="body-text">EU - 43</div></div>--}}
{{--                                </div>--}}
{{--                            </fieldset>--}}
{{--                            <fieldset class="name">--}}
{{--                                <div class="body-title mb-10">Product date</div>--}}
{{--                                <div class="select">--}}
{{--                                    <input type="date" name="date" value="2023-11-20">--}}
{{--                                </div>--}}
{{--                            </fieldset>--}}
{{--                        </div>--}}
                    <div class="cols gap10">
                        <button class="tf-button w-full"  type="submit">Add product</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-product -->
        </div>
        <!-- /main-content-wrap -->
@endsection
