@extends('layout.authentication')
@section('title', 'Forgot Password')


@section('content')

<div class="auth_brand">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>                                                
</div>
<div class="card forgot-pass">
    <div class="header">
        <p class="lead"><strong>Oops</strong>,<br> forgot something?</p>                    
    </div>
    <div class="body">
        <form class="form-auth-small">
            <div class="form-group c_form_group">
                <label>Type email to recover password.</label>
                <input type="text" class="form-control" placeholder="Register email">
            </div>
            <button type="submit" class="btn btn-dark btn-lg btn-block">RESET PASSWORD</button>
            <div class="bottom">
                <span class="helper-text">Know your password? <a href="{{route('authentication.login')}}">Login</a></span>
            </div>
        </form>
    </div>
</div>

@stop
