@extends('layout.master')
@section('parentPageTitle', 'Users')
@section('title', 'Profile')


@section('content')

<!-- Page header section  -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-xl-5 col-md-5 col-sm-12">
            <h1>Hallo, Selamat Datang</h1>
            <span>Halaman @yield('title'),</span>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-md-12">
        <div class="card social theme-bg">
            <div class="profile-header d-flex justify-content-between justify-content-center">
                <div class="d-flex">
                    <div class="mr-3">
                        <img src="{{ asset('assets/images/user.png') }}" class="rounded" alt="">
                    </div>
                    <div class="details">
                        <h5 class="mb-0"><strong>{{ Auth::user()->name }}</strong></h5>
                        <span class="text-light">{{ Auth::user()->getRoleNames()[0] }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12">
        <div class="card">
            <div class="header">
                <h2>Info</h2>
                {{-- <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul> --}}
            </div>
            <div class="body">
                <hr>
                <small class="text-muted">Email address: </small>
                <p>{{ Auth::user()->email}}</p>
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
@stop

@section('vendor-script')
<script src="{{ asset('assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
@stop

@section('page-script')

@stop
