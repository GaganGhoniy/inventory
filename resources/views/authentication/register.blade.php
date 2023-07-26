@extends('layout.authentication')
@section('title', 'Register')


@section('content')

<div class="auth_brand">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>                                                
</div>
<div class="card">
    <div class="header">
        <p class="lead">Create an account</p>
    </div>
    <div class="body">
        <button class="btn btn-signin-social"><i class="fa fa-facebook-official facebook-color"></i> Sign in with Facebook</button>
        <div class="separator-linethrough"><span>OR</span></div>
        <form class="form-auth-small">
            <div class="form-group c_form_group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your email address">
            </div>
            <div class="form-group c_form_group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">Register</button>
            <div class="bottom">
                <span>Already have an account? <a href="{{route('authentication.login')}}">Login</a></span>
            </div>
        </form>
    </div>
</div>

@stop
