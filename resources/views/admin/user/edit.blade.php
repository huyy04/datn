@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
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
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data" class="form-new-product form-style-1" >
                        @method('POST')
                        @csrf
                        <fieldset class="name">
                            <div class="body-title"> Name <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="text" name="name" tabindex="0" aria-required="true" required="" value="{{old('name',$user->name)}}">
                            <div>
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title">Email  <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="email" name="email" placeholder="Email"  tabindex="0" aria-required="true" value="{{old('email',$user->email) }}">
                            <div>
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title">password <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="text" placeholder="Category name" name="password" tabindex="0" aria-required="true" required="" value="{{old('password',$user->password)}}">
                            <div>
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title">Phone <span class="tf-color-1"></span></div>
                            <input class="flex-grow" type="text" placeholder="Category name" name="phone" tabindex="0" aria-required="true"  value="{{old('phone',$user->phone)}}">
                            <div>
                                @error('name')
                                <div style="color: red">{{ $message }}</div>
                                @enderror
                            </div>
                        </fieldset>
                        <fieldset class="name">
                            <div class="body-title">Role<span class="tf-color-1"></span></div>
                            <fieldset class="Role mb-24">
                                <label>
                                    <input type="radio" name="role" value="1" {{old('role', $user->role == 1 ? 'checked' : '' )}} required>
                                    User
                                </label>
                                <label>
                                    <input type="radio" name="role" value="2" {{old('role', $user->role == 2 ? 'checked' : '' )}} required>
                                    Admin
                                </label>
                            </fieldset>

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
