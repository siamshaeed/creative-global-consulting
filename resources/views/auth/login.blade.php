@extends('layouts.login')

@section('title')
    Login | Creative Global Consultancy
@endsection

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-soft-primary">
                    <div class="row">
                        <div class="col-7">
                            <div class="text-primary p-4">
                                <h5 class="text-primary">Welcome Back !</h5>
                                <p><b>Creative Global Consultancy</b></p>
                            </div>
                        </div>
                        <div class="col-5 align-self-end">
                            <img src="{{ asset('') }}assets/images/profile-img.png" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div>
                        <a href="#">
                            <div class="avatar-md profile-user-wid mb-4">
                                <span class="avatar-title rounded-circle bg-light">
                                    <img src="{{ asset('') }}assets/images/logo.svg" alt="" class="rounded-circle"
                                         height="34">
                                </span>
                            </div>
                        </a>
                    </div>

                    <div class="p-2">
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('Email Address / Phone Number') }}<span class="text-warning" title="Must be Required">*</span></label>
                                <input type="text" name="email"
                                       value="{{ old('email') }}"
                                       class="form-control @error('email') is-invalid @enderror"
                                       placeholder="Enter Email or Phone">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('Password') }} <span class="text-warning" title="Must be Required">*</span></label>
                                <input type="password" name="password"
                                       value="{{ old('password') }}"
                                       class="form-control @error('password') is-invalid @enderror" id="password"
                                       placeholder="Enter password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="custom-control custom-checkbox">
                                <input class="form-check-input" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </div>

                            <div class="mt-3">
                                <button class="btn btn-primary btn-block waves-effect waves-light" type="submit"
                                        class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>

{{--                            Forgot Your Password--}}

{{--                            <div class="mt-2 text-center">--}}
{{--                                @if (Route::has('password.request'))--}}
{{--                                    <a class="btn btn-link" href="{{ route('password.request') }}">--}}
{{--                                        {{ __('Forgot Your Password?') }}--}}
{{--                                    </a>--}}
{{--                                @endif--}}
{{--                            </div>--}}

                            <div class="mt-2 text-center">

                                <div>
                                    <p>Don't have an account ? <a href="{{ route('register') }}"
                                        class="font-weight-medium text-primary"> Signup
                                        now </a></p>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
