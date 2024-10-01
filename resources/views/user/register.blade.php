@extends('layout.client.layout')
@section('content')
    <main class="main-content">

        <!-- Login Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="login-register-form">
                    <h3 class="title">Create Account</h3>
                    <p>Please Register using account detail bellow.</p>
                    <form action="#">
                        <div class="row row-cols-1 g-4">
                            <div class="col"><input class="form-field" type="text" placeholder="First Name"></div>
                            <div class="col"><input class="form-field" type="text" placeholder="Last Name"></div>
                            <div class="col"><input class="form-field" type="email" placeholder="Email"></div>
                            <div class="col"><input class="form-field" type="password" placeholder="Password"></div>
                            <div class="col"><input class="btn w-100" type="submit" value="Register"></div>
                            <div class="col">
                                <p>Already have an account? <a href="login.html"><b>Login</b></a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login Section End -->
    </main>
@endsection
