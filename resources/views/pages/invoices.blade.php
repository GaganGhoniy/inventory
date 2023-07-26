@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Invoices')


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
    <div class="col-12">
        <div class="card">
            <div class="body">
                <div class="table-responsive invoice_list">
                    <table class="table table-hover js-basic-example dataTable">
                        <thead>
                            <tr> 
                                <th style="width: 20px;">#</th>
                                <th>Client details</th>
                                <th style="width: 120px;">Amount</th>
                                <th style="width: 80px;">Status</th>
                                <th style="width: 100px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <span>01</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar1.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">South Shyanne</a>
                                            <p class="mb-0">south.shyanne@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$1200</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>02</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar2.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Zoe Baker</a>
                                            <p class="mb-0">zoe.baker@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$378</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>03</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar3.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Colin Brown</a>
                                            <p class="mb-0">colinbrown@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$653</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>04</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar4.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Kevin Gill</a>
                                            <p class="mb-0">kevin.gill@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$451</td>
                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>05</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar5.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Maria Gill</a>
                                            <p class="mb-0">Maria.gill@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$1,989</td>
                                <td><span class="badge badge-success  ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>06</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar6.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Kevin Baker</a>
                                            <p class="mb-0">kevin.baker@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$343</td>
                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>13</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar7.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Colin Brown</a>
                                            <p class="mb-0">colin-brown@example.com</p>
                                        </div>
                                    </div>                                        
                                </td>
                                <td>$653</td>
                                <td><span class="badge badge-success ml-0 mr-0">Done</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <span>14</span>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <img src="{{ asset('assets/images/xs/avatar8.jpg') }}" data-toggle="tooltip" data-placement="top" title="Avatar Name" alt="Avatar" class="rounded-circle w35 h35">
                                        <div class="ml-3">
                                            <a href="{{route('pages.invoicesview')}}" title="">Kevin Gill</a>
                                            <p class="mb-0">kevin-gill@example.com</p>
                                        </div>
                                    </div>
                                </td>
                                <td>$451</td>
                                <td><span class="badge badge-warning  ml-0 mr-0">Panding</span></td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-default" title="Send Invoice"><i class="fa fa-envelope"></i></button>
                                    <button type="button" class="btn btn-sm btn-default "title="Print"><i class="fa fa-print"></i></button>
                                    <button type="button" class="btn btn-sm btn-default" title="Delete"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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