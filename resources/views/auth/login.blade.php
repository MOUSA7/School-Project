@extends('auth.master')

@section('page_title')
    Login
@stop

@section('content')

    <!-- main content -->
    <div class="agile_info">
        <div class="w3l_form">
            <div class="left_grid_info">
                <h1>Manage Your Business Company</h1>
                <p>Donec dictum nisl nec mi lacinia, sed maximus tellus eleifend. Proin molestie cursus sapien ac eleifend.</p>
                <img src="{{asset('front/register/images/login.png')}}"  alt="" />
            </div>
        </div>
        <div class="w3_info">
            <h2>Login to your Account</h2>
            <p>Enter your details to login.</p>
            <form method="POST" action="{{ route('login') }}" >
                @csrf

                <label>Email Address</label>

                <div class="input-group">
                    <span class="fa fa-envelope" aria-hidden="true"></span>
                    <input id="email" type="email" placeholder="Enter Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                    <span class="invalid-feedback"  role="alert">
                                        <strong class="msg">{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>


                <label>Password</label>
                <div class="input-group">
                    <span class="fa fa-lock" aria-hidden="true"></span>
                    <input id="password" type="password" placeholder="Enter Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                                        <strong class="msg">{{ $message }}</strong>
                                    </span>
                    @enderror
                </div>
                <div class="login-check">
                    <label class="checkbox">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <i> </i> Remember me</label>
                </div>
                <button class="btn btn-danger btn-block" type="submit">Login</button >
                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </form>
            <p class="account">By clicking login, you agree to our <a href="#">Terms & Conditions!</a></p>
            <p class="account1">Dont have an account? <a href="{{ route('register') }}">Register here</a></p>
        </div>
    </div>
    <!-- //main content -->
    </div>
    <!-- footer -->
    <div class="footer">
        <p>&copy; 2019 Business login form. All Rights Reserved | Design by <a href="/public" target="blank">Company</a></p>
    </div>
    <!-- footer -->
    </div>

@stop
