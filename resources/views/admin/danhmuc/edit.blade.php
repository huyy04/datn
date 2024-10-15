@extends('layout.admin.layout')
@section('content')
        <!-- main-content-wrap -->
        <div class="main-content-wrap">
            <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                <h3>Category infomation</h3>
                <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                    <li>
                        <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <a href="#"><div class="text-tiny">Category</div></a>
                    </li>
                    <li>
                        <i class="icon-chevron-right"></i>
                    </li>
                    <li>
                        <div class="text-tiny">New category</div>
                    </li>
                </ul>
            </div>
            <!-- new-category -->
            <div class="wg-box">
                <form action="{{route('danhmuc.update', $model->id)}}" method="POST" enctype="multipart/form-data" class="form-new-product form-style-1" >
                @method('POST')
                @csrf
                    <fieldset class="name">
                        <div class="body-title">Product name <span class="tf-color-1"></span></div>
                        <input class="flex-grow" type="text" placeholder="Category name" name="name" tabindex="0" aria-required="true" required="" value="{{$model->name}}">
                        <div>
                            @error('name')
                            <div style="color: red">{{ $message }}</div>
                            @enderror
                        </div>
                    </fieldset>
                    <!-- <fieldset>
                        <div class="body-title">Upload images <span class="tf-color-1">*</span></div>
                        <div class="upload-image flex-grow">
                            <div class="item up-load">
                                <label class="uploadfile" for="myFile">
                                                    <span class="icon">
                                                        <i class="icon-upload-cloud"></i>
                                                    </span>
                                    <span class="body-text">Drop your images here or select <span class="tf-color">click to browse</span></span>
                                    <input type="file" id="myFile" name="filename">
                                </label>
                            </div>
                        </div>
                    </fieldset> -->
                    <div class="bot">
                        <div></div>
                        <button class="tf-button w208" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <!-- /new-category -->
        </div>
        <!-- /main-content-wrap -->
@endsection
