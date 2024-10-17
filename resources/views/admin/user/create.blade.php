@extends('layout.admin.layout')
@section('content')
    <div class="main-content">
        <!-- main-content-wrap -->
        <div class="main-content-inner">
            <!-- main-content-wrap -->
            <div class="main-content-wrap">
                <div class="flex items-center flex-wrap justify-between gap20 mb-27">
                    <h3>Add New User</h3>
                    <ul class="breadcrumbs flex items-center flex-wrap justify-start gap10">
                        <li>
                            <a href="index.html"><div class="text-tiny">Dashboard</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <a href="#"><div class="text-tiny">User</div></a>
                        </li>
                        <li>
                            <i class="icon-chevron-right"></i>
                        </li>
                        <li>
                            <div class="text-tiny">Add New User</div>
                        </li>
                    </ul>
                </div>
                <!-- add-new-user -->
                <form action="{{route('user.store')}}" method="POST" enctype="multipart/form-data" class="form-add-new-user form-style-2">
                    @csrf
                    <div class="wg-box">
                        <div class="left">
                            <h5 class="mb-4">Account</h5>
                            <div class="body-text">Fill in the information below to add a new account</div>
                        </div>
                        <div class="right flex-grow">
                            <fieldset class="name mb-24">
                                <div class="body-title mb-10">Name</div>
                                <input class="flex-grow" type="text" placeholder="Username" name="name" tabindex="0" value="" aria-required="true" required="">
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </fieldset>
                            <fieldset class="email mb-24">
                                <div class="body-title mb-10">Email</div>
                                <input class="flex-grow" type="email" placeholder="Email" name="email" tabindex="0" value="" aria-required="true" required="">
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </fieldset>
                            <fieldset class="password mb-24">
                                <div class="body-title mb-10">Password</div>
                                <input class="password-input" type="password" placeholder="Enter password" name="password" tabindex="0" value="" aria-required="true" required="">
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                                <span class="show-pass">
                                                    <i class="icon-eye view"></i>
                                                    <i class="icon-eye-off hide"></i>
                                                </span>
                            </fieldset>
                            <fieldset class="phone">
                                <div class="body-title mb-10">Phone</div>
                                <input class="password-input" type="text" placeholder="Phone..." name="phone" tabindex="0" value="" aria-required="true" required="">
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </fieldset>
                            <fieldset class="Role mb-24">
                                <div class="body-title mb-10">Role</div>
                                <label>
                                    <input type="radio" name="role" value="1" required>
                                    Admin
                                    <div>
                                        @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </label>
                                <label>
                                    <input type="radio" name="role" value="2" required>
                                    User
                                    <div>
                                        @error('name')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </label>
                            </fieldset>
                        </div>
                    </div>
                    <div class="bot">
                        <button class="tf-button w180" type="submit">Save</button>
                    </div>

                </form>
                <!-- /add-new-user -->
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
