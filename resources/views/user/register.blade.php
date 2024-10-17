@extends('layout.client.layout')
@section('content')
    <main class="main-content">
        <!-- Register Section Start -->
        <div class="section section-padding">
            <div class="container">
                <div class="login-register-form">
                    <h3 class="title">Create Account</h3>
                    <p>Please Register using account detail below.</p>
                    <form action="{{ route(name: 'register.store') }}" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <div class="row row-cols-1 g-4">
                            <div class="col"><input class="form-field" type="email" name="email" placeholder="Email" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col"><input class="form-field" type="text" name="name" placeholder="Name" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col"><input class="form-field" type="password" name="password" placeholder="Password" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col"><input class="form-field" type="text" name="phone" placeholder="Phone" required>
                                <div>
                                    @error('name')
                                    <div style="color: red">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col"><input class="btn w-100" type="submit" value="Register"></div>
                            <div class="col">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Register Section End -->
    </main>

@endsection
