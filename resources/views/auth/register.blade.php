{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
@extends('layouts.custom-master')

@section('styles')


@endsection

@section('content')

@section('body')
    <body class="authentication-background">
    @endsection

    <div class="container-lg">
        <div class="row justify-content-center align-items-center authentication authentication-basic h-100">
            <div class="col-xxl-5 col-xl-5 col-md-6 col-sm-8 col-12">
                <div class="card custom-card my-4">
                    <div class="top-left"></div>
                    <div class="top-right"></div>
                    <div class="bottom-left"></div>
                    <div class="bottom-right"></div>
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="card-body p-5">
                            <div class="mb-3 d-flex justify-content-center">
                                <a href="{{url('index')}}">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                                    <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                                </a>
                            </div>
                            <p class="h5 mb-2 text-center">Sign Up</p>
                            <p class="mb-4 text-muted op-7 fw-normal text-center fs-14">Welcome! Begin by creating your account.</p>
                            <div class="d-flex mb-3 justify-content-between gap-2 flex-wrap flex-lg-nowrap">
                                <button class="btn btn-lg btn-light-ghost border d-flex align-items-center justify-content-center flex-fill">
                                        <span class="avatar avatar-xs">
                                            <img src="{{asset('build/assets/images/media/apps/google.png')}}" alt="">
                                        </span>
                                    <span class="lh-1 ms-2 fs-13 text-default">Signup with Google</span>
                                </button>
                                <button class="btn btn-lg btn-light-ghost border d-flex align-items-center justify-content-center flex-fill">
                                        <span class="avatar avatar-xs invert-1">
                                            <img src="{{asset('build/assets/images/media/apps/apple.png')}}" alt="">
                                        </span>
                                    <span class="lh-1 ms-2 fs-13 text-default">Signup with Apple</span>
                                </button>
                            </div>
                            <div class="text-center my-3 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="row gy-3">
                                <div class="col-xl-12">
                                    <label for="signup-firstname" class="form-label text-default">Full Name<sup>*</sup></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="signup-firstname" placeholder="full name"  name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                </div>

                                <div class="col-xl-12">
                                    <label for="signup-email" class="form-label text-default">Email<sup>*</sup></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="signup-email" placeholder="Email"  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                </div>

                                <div class="col-xl-12">
                                    <label for="signup-password" class="form-label text-default">Password<sup>*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control create-password-input" id="signup-password" placeholder="password" name="password" required autocomplete="new-password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-password',this)"  id="button-addon2"><i class="ri-eye-off-line align-middle"></i></a>
                                    </div>
                                </div>

                                <div class="col-xl-12">
                                    <label for="signup-confirmpassword" class="form-label text-default">Confirm Password<sup>*</sup></label>
                                    <div class="position-relative">
                                        <input type="password" class="form-control create-password-input" id="signup-confirmpassword" placeholder="confirm password" name="password_confirmation" required autocomplete="new-password">
                                        <a href="javascript:void(0);" class="show-password-button text-muted" onclick="createpassword('signup-confirmpassword',this)"  id="button-addon21"><i class="ri-eye-off-line align-middle"  name="password_confirmation" required autocomplete="new-password"></i></a>
                                    </div>
                                    <div class="form-check mt-3">
                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                        <label class="form-check-label text-muted fw-normal fs-14" for="defaultCheck1">
                                        </label>
                                        By creating a account you agree to our
                                        <a href="{{url('terms-conditions')}}" class="text-success"><u>Terms & Conditions</u></a> and <a class="text-success"><u>Privacy Policy</u></a>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mt-4">
                                <button type="submit" class="btn btn-primary">Create Account</button>
                            </div>
                            <div class="text-center">
                                <p class="text-muted mt-3 mb-0">Already have an account? <a href="{{url('signin-basic')}}" class="text-primary">Sign In</a></p>
                            </div>
                            <div class="btn-list text-center mt-3">
                                <button class="btn btn-icon btn-sm btn-wave authentication-social-btn">
                                    <i class="ri-facebook-line fw-bold"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-wave authentication-social-btn">
                                    <i class="ri-twitter-x-line fw-bold"></i>
                                </button>
                                <button class="btn btn-icon btn-sm btn-wave authentication-social-btn">
                                    <i class="ri-instagram-line fw-bold"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

    @section('scripts')

        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection
