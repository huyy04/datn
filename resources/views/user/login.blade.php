@extends('layout.client.layout')
@section('content')
    <main class="main-content">

        <!-- Login Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="login-register-form">
                    <h3 class="title">Login</h3>
                    <p>Please Register using account detail bellow.</p>
                    <form action="#">
                        <div class="row row-cols-1 g-4">
                            <div class="col"><input class="form-field" type="email" placeholder="Email"></div>
                            <div class="col"><input class="form-field" type="password" placeholder="Password"></div>
                            <div class="col"><input class="btn w-100" type="submit" value="Sign In"></div>
                            <div class="col">
                                <p>Don't have an account? <a href="register.html"><b>Create One</b></a></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Login Section End -->
    </main>
@endsection
