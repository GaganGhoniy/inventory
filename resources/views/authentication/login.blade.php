@extends('layout.authentication')
@section('title', 'Login')


@section('content')

    <div class="auth_brand">
        <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>                                                
    </div>
    <div class="card">
        <div class="header">
            <p class="lead">Login to your account</p>
        </div>
        <div class="body">
            <form class="form-auth-small" action="index.html">
                <div class="form-group c_form_group">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Enter your email address">
                </div>
                <div class="form-group c_form_group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password">
                </div>
                <div class="form-group clearfix">
                    <label class="fancy-checkbox element-left">
                        <input type="checkbox">
                        <span>Remember me</span>
                    </label>								
                </div>
                <a class="btn btn-dark btn-lg btn-block" href="{{route('dashboard.index')}}">LOGIN</a>
                <div class="bottom">
                    <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="{{route('authentication.forgotpassword')}}">Forgot password?</a></span>
                    <span>Don't have an account? <a href="{{route('authentication.register')}}">Register</a></span>
                </div>
            </form>
        </div>
    </div>

@stop
