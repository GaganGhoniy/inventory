@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Invoices View')


@section('content')

<!-- Page header section  -->
<div class="block-header">
    <div class="row clearfix">
        <div class="col-xl-5 col-md-5 col-sm-12">
            <h1>Hi, Welcomeback!</h1>
            <span>JustDo @yield('title'),</span>
        </div>            
        <div class="col-xl-7 col-md-7 col-sm-12 text-md-right">
            <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                    <p class="text-muted mb-1">New Invoice</p>
                    <h5 class="mb-0">205</h5>
                </div>
                <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                    <p class="text-muted mb-1">Done</p>
                    <h5 class="mb-0">620</h5>
                </div>
                <div class="mb-3 mb-xl-0">
                    <p class="text-muted mb-1">Panding</p>
                    <h5 class="mb-0">54</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light page_menu">
            <a class="navbar-brand" href="javascript:void(0);">M.</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars text-muted"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item vivify swoopInTop delay-150 active"><a class="nav-link" href="{{route('pages.invoices')}}">Invoice list</a></li>
                    <li class="nav-item vivify swoopInTop delay-250"><a class="nav-link" href="javascript:void(0);">Scheduled</a></li>
                    <li class="nav-item vivify swoopInTop delay-350"><a class="nav-link" href="javascript:void(0);">Prepayment</a></li>
                    <li class="nav-item vivify swoopInTop delay-350"><a class="nav-link" href="javascript:void(0);">Reminders</a></li>
                </ul>
                <div class="ml-auto">
                    <button type="button" class="btn btn-default">Create New</button>
                    <a href="{{route('pages.settings')}}" class="btn btn-default">Settings</a>
                    <a href="javascript:void(0);" class="btn btn-dark">Buy this item</a>
                </div>
            </div>
        </nav>
    </div>
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('assets/images/xs/avatar1.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w35 h35 rounded" data-original-title="Avatar Name">
                    <div class="ml-3">
                        <a href="page-invoices-detail.html" title="">South Shyanne</a>
                        <p class="mb-0">south.shyanne@example.com</p>
                    </div>
                </div>
                <hr>
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-6">
                        <p class="m-b-0"><strong>Order Date: </strong> AUG 15, 2018</p>
                        <p><strong>Order ID: </strong> C09</p>                                    
                    </div>
                    <div class="col-md-6 col-sm-6 text-right">
                        
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-hover table-bordered mb-5">
                                <thead class="table-primary">
                                    <tr>
                                        <th>#</th>                                                        
                                        <th>Item</th>
                                        <th style="width: 120px;">Quantity</th>
                                        <th class="hidden-sm-down" style="width: 80px;">Cost</th>
                                        <th style="width: 80px; text-align: right">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <span>iPhoneX 128GB</span>
                                            <p class="hidden-sm-down mb-0 text-muted"> Lorem Ipsum has been the industry's standard.</p>
                                        </td>                                                    
                                        <td>01</td>
                                        <td class="hidden-sm-down">$380</td>
                                        <td class="text-right">$380</td>
                                    </tr>
                                    <tr>
                                        <td>02</td>
                                        <td>
                                            <span>Nokia 6.1 64GB</span>
                                            <p class="hidden-sm-down mb-0 text-muted">simply dummy text of the printing and typesetting industry. </p>
                                        </td>
                                        <td>5</td>
                                        <td class="hidden-sm-down">$50</td>
                                        <td class="text-right">$250</td>
                                    </tr>
                                    <tr>
                                        <td>03</td>
                                        <td>
                                            <span>OnePlus6 64GB Red</span>
                                            <p class="hidden-sm-down mb-0 text-muted">simply dummy text of the printing and typesetting industry. </p>
                                        </td>
                                        <td>1</td>
                                        <td class="hidden-sm-down">$120</td>
                                        <td class="text-right">$120</td>
                                    </tr>                                                
                                </tbody>
                                <tfoot>
                                    <td colspan="4"></td>
                                    <td class="text-right">
                                        <span>Total: <strong class="text-success">$750.00</strong></span>
                                    </td>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-6">
                        <span><strong>Note:</strong> Thank you for doing Business with us.</span>
                    </div>
                    <div class="col-md-6 text-right">
                        <button class="btn btn-primary theme-bg"><i class="icon-printer"></i> Print</button>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/jquery-datatable/dataTables.bootstrap4.min.css') }}">
@stop

@section('vendor-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/pages/tables/invoice.js') }}"></script>
@stop