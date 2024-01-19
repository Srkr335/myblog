@extends('layouts.reg')

@section('content')
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="row row-space">
                <div class="col-md-6">
                    <div class="input-group">
                        <input type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group">
                        <input placeholder="Phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row row-space">
                <div class="col-md-8">
                    <div class="input-group">
                        <input placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group">
                        <input placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-12">
                    <div class="input-group">
                        <input id="password-confirm" placeholder="Password-Confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 offset-md-6">
                    <button class="btn btn--radius-2 btn--blue" type="submit">{{ __('Register') }}</button>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-6 offset-md-6">
                    <span class="txt1">
                        {{ __("Already have an account?") }}
                    </span>
                    <a class="txt2" href="{{ route('login') }}">
                        {{ __('Sign In') }}
                    </a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
 <!-- Jquery JS-->
 <script src="{{ asset('assets-reg/vendor/jquery/jquery.min.js') }}"></script>
 <!-- Vendor JS-->
 <script src="{{ asset('assets-reg/vendor/select2/select2.min.js') }}"></script>
 <script src="{{ asset('assets-reg/vendor/datepicker/moment.min.js') }}"></script>
 <script src="{{ asset('assets-reg/vendor/datepicker/daterangepicker.js') }}"></script>

 <!-- Main JS-->
 <script src="{{ asset('assets-reg/js/global.js') }}"></script>
@endsection
