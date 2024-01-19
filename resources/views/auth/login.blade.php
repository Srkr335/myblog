@extends('layouts.auth')

@section('content')
<form method="POST" action="{{ route('login') }}">
    @csrf

    <span class="login100-form-title p-b-26">
        Welcome
    </span>
    <span class="login100-form-title p-b-48">
        <i class="zmdi zmdi-font"></i>
    </span>

    <div class="wrap-input100 validate-input" data-validate="Valid email is: a@b.c">
        <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="wrap-input100 validate-input" data-validate="Password is required">
        <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
    </div>

    <div class="container-login100-form-btn">
        <div class="wrap-login100-form-btn">
            <div class="login100-form-bgbtn"></div>
            <button type="submit" class="login100-form-btn">
                {{ __('Login') }}
            </button>
        </div>
    </div>

    <div class="text-center p-t-115">
        <span class="txt1">
            {{ __("Don't have an account?") }}
        </span>

        <a class="txt2" href="{{ route('register') }}">
            {{ __('Sign Up') }}
        </a>
    </div>
</form>
@endsection

@section('scripts')
<script src="{{ asset('assets-admin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('assets-admin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('assets-admin/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('assets-admin/js/main.js') }}"></script>
@endsection
