@extends('layout.authentication')
@section('title', 'Page 404')


@section('content')

<div class="auth_brand">
    <a class="navbar-brand" href="#"><img src="{{ asset('assets/images/icon.svg') }}" width="50" class="d-inline-block align-top mr-2" alt="">Mooli</a>                                                
</div>
<div class="card page-400">
    <div class="header">
        <p class="lead"><span class="number left">404 </span><span class="text">Oops! <br/>Page Not Found</span></p>                    
    </div>
    <div class="body">
        <p>The page you were looking for could not be found, please <a href="javascript:void(0);">contact us</a> to report this issue.</p>
        <div class="margin-top-30">
            <a href="javascript:history.go(-1)" class="btn btn-default btn-lg btn-block"><span>Go Back</span></a>
            <a href="{{route('dashboard.index')}}" class="btn btn-dark btn-lg btn-block"><span>Home</span></a>
        </div>
    </div>
</div>

@stop
