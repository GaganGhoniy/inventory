@extends('layout.authentication')
@section('title', 'Login')


@section('content')

<div class="auth_brand">
    <a class="navbar-brand d-flex justify-content-center" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50"
            class="d-inline-block align-top mr-2" alt="">Inventori PT. Dakonan Mas</a>
</div>
<div class="card">
    <div class="header">
        <p class="lead">Login to your account</p>
    </div>
    <div class="body">
        <form class="form-auth-small" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group row">
                <label>Email</label>
                <input type="text" class="form-control" placeholder="Enter your Email" @error('email') is-invalid @enderror"
                    name="email" required autocomplete="email" autofocus value="{{ old('email') }}">
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group row">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your password" @error('password')
                    is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>
            <button class="btn btn-dark btn-lg btn-block" type="submit">LOGIN</button>
            {{-- <div class="bottom">
                <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a
                        href="{{route('authentication.forgotpassword')}}">Forgot password?</a></span>
                <span>Don't have an account? <a href="{{route('authentication.register')}}">Register</a></span>
            </div> --}}
        </form>
    </div>
</div>

@stop