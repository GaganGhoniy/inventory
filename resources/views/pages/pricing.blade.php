@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Pricing')


@section('content')

<!-- Page header section  -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-xl-5 col-md-5 col-sm-12">
            <h1>Hi, Welcomeback!</h1>
            <span>JustDo @yield('title'),</span>
        </div>            
        <div class="col-xl-7 col-md-7 col-sm-12 text-md-right">
            <a href="{{route('pages.settings')}}" class="btn btn-default">Settings</a>
            <a href="javascript:void(0);" class="btn btn-dark">Buy this item</a>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="{{ asset('assets/images/plan-1.svg') }}" /></li>
                <li class="price">
                    <h3><span>$</span> 99 <small>/ mo</small></h3>
                    <span>Freelance</span>
                </li>
                <li>1 GB of space</li>
                <li>Support at $25/hour</li>
                <li>Limited cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-default">Choose plan</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body active">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="{{ asset('assets/images/plan-2.svg') }}" /></li>
                <li class="price">
                    <h3><span>$</span> 199 <small>/ mo</small></h3>
                    <span>Business</span>
                </li>
                <li>5 GB of space</li>
                <li>Support at $10/hour</li>
                <li>Full cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-primary theme-bg">Choose plan</button></li>
            </ul>
        </div>
    </div>
    <div class="col-lg-4 cool-md-4 col-sm-12">
        <div class="card">
            <ul class="pricing body">
                <li class="plan-img"><img class="img-fluid rounded-circle" src="{{ asset('assets/images/plan-3.svg') }}" /></li>
                <li class="price">
                    <h3><span>$</span> 299 <small>/ mo</small></h3>
                    <span>Enterprise</span>
                </li>
                <li>15 GB of space</li>
                <li>Support at $5/hour</li>
                <li>Full cloud access</li>                         
                <li class="plan-btn"><button class="btn btn-default">Choose plan</button></li>
            </ul>
        </div>
    </div>
</div>

@stop

@section('page-styles')

@stop

@section('vendor-script')

@stop

@section('page-script')

@stop