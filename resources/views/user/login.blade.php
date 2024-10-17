@extends('layout.client.layout')
@section('content')
    <main class="main-content">

        <!-- Login Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="login-register-form">
                    <h3 class="title">Login</h3>
                    <p>Please Register using account detail bellow.</p>
                    <form action="{{ route('login.store') }}" method="POST">
                        @csrf
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        <div class="row row-cols-1 g-4">
                            <div class="col">
                                <input class="form-field" type="email" name="email" placeholder="Email" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <input class="form-field" type="password" name="password" placeholder="Password" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col">
                                <input class="btn w-100" type="submit" value="Sign In">
                            </div>
                            <div class="col">
                                <p>Bạn chưa có tài khoản? <a href="{{ route('user.register') }}"><b>Tạo tài khoản</b></a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login Section End -->
    </main>
@endsection
