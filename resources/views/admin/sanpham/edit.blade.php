@extends('layout.admin.layout')
@section('content')
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Sua san pham</h3>
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
                        <div class="text-tiny">Sua san pham</div>
                    </li>
                </ul>
            </div>
            <!-- form-add-product -->
            <form class="tf-section-2 form-add-product" action="{{ route('san-pham.update',$productId->id) }}" method="POST" enctype="multipart/form-data" >
                @csrf
                @method('put')
                <div class="wg-box">
                    <fieldset class="name">
                        <div class="body-title mb-10">Ten san pham<span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="name" tabindex="0" value="{{ $productId->name }}" aria-required="true">
                        @error('name')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                    <fieldset class="name">
                        <div class="body-title mb-10">Gia san pham<span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="price" tabindex="0" value="{{ $productId->price }}" aria-required="true" required="">
                    </fieldset>
                    @error('price')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="gap22 cols">
                        <fieldset class="">
                            <div class="body-title mb-10">Danh  muc<span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select class="" name="category_id">
                                    @foreach($category as $cate)
                                        <option value="{{ $cate->id }}" @if($productId->category_id === $cate->id) {{ 'selected' }} @endif>{{ $cate->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="">
                            <div class="body-title mb-10">Thuong hieu<span class="tf-color-1">*</span></div>
                            <div class="select">
                                <select class="" name="brand_id">
                                    @foreach($brand as $br)
                                        <option value="{{ $br->id }}" @if($productId->brand_id === $br->id) {{ 'selected' }} @endif>{{ $br->name }}</option>
                                    @endforeach
                                </select>
                                @error('brand_id')
                                    <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                    </div>
                    <fieldset class="name">
                        <div class="body-title mb-10">Ton kho<span class="tf-color-1">*</span></div>
                        <input class="mb-10" type="text" placeholder="Enter product name" name="ton_kho" tabindex="0" value="{{ $productId->ton_kho }}" aria-required="true" required="">
                    </fieldset>
                    @error('ton_kho')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <fieldset class="description">
                        <div class="body-title mb-10">Mo ta<span class="tf-color-1">*</span></div>
                        <textarea class="mb-10" name="description" placeholder="Description" tabindex="0" aria-required="true" required="">{{ $productId->description }}</textarea>
                        <div class="text-tiny">Do not exceed 100 characters when entering the product name.</div>
                        @error('description')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </fieldset>
                </div>
                <div class="wg-box">
                    <fieldset>
                        <div class="body-title mb-10">Upload anh</div>
                        <div class="upload-image mb-16">
                            <div class="item">
                                <img src="{{ asset('storage/'.$productId->image) }}" alt="">
                            </div>
{{--                            <div class="item">--}}
{{--                                <img src="{{ asset('storage/'.$productId->image) }}" alt="">--}}
{{--                            </div>--}}
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
                    <div class="cols gap10">
                        <button class="tf-button w-full" type="submit">Save</button>
                    </div>
                </div>
            </form>
            <!-- /form-add-product -->
        </div>
        <!-- /main-content-wrap -->
@endsection
