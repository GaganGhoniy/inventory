@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Campaign')


@section('content')

    <div class="block-header">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <h1>Hi, Welcomeback!</h1>
                <span>JustDo @yield('title'),</span>
            </div>
            <div class="col-lg-8 col-md-12 col-sm-12 text-lg-right">
                <div class="d-flex align-items-center justify-content-lg-end mt-4 mt-lg-0 flex-wrap vivify pullUp delay-550">
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0 hidden-xs">
                        <p class="text-muted mb-1">Purchases <span id="mini-bar-chart3" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">6,520</h5>
                    </div>
                    <div class="border-right pr-4 mr-4 mb-2 mb-xl-0">
                        <p class="text-muted mb-1">Today’s profit <span id="mini-bar-chart2" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">$541.00 M</h5>
                    </div>
                    <div class="mb-3 mb-xl-0">
                        <p class="text-muted mb-1">Balance <span id="mini-bar-chart1" class="mini-bar-chart"></span></p>
                        <h5 class="mb-0">$982.60 M</h5>
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
                        <li class="{{ Request::segment(2) === 'index' ? 'nav-item active' : null }}"><a class="nav-link" href="{{route('dashboard.index')}}">Analytics</a></li>
                        <li class="{{ Request::segment(2) === 'cryptocurrency' ? 'nav-item active' : null }}"><a class="nav-link" href="{{route('dashboard.cryptocurrency')}}">Cryptocurrency</a></li>
                        <li class="{{ Request::segment(2) === 'campaign' ? 'nav-item active' : null }}"><a class="nav-link" href="{{route('dashboard.campaign')}}">Campaign</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0);" role="button" data-toggle="dropdown">More</a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{route('dashboard.ecommerce')}}">eCommerce Analytics</a>
                                <a class="dropdown-item" href="javascript:void(0);">Sales Monitoring</a>
                                <a class="dropdown-item" href="javascript:void(0);">Finance Performance</a>
                            </div>
                        </li>
                    </ul>
                    <div class="ml-auto">
                        <a href="javascript:void(0);" class="btn btn-default">Facebook</a>
                        <a href="javascript:void(0);" class="btn btn-default">Google</a>
                        <a href="javascript:void(0);" class="btn btn-dark">Buy this item</a>
                    </div>
                </div>
            </nav>
        </div>
        
        <div class="col-12">
            <div class="card theme-bg text-light">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>Click</div>
                            <div class="mt-3 h2">158</div>
                            <div>
                                <div class="font-18">127.1% <i class="fa fa-caret-up"></i></div>
                                <small class="font-12 text-light">vs 248(prev)</small>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>Impressions</div>
                            <div class="mt-3 h2">1,124</div>
                            <div>
                                <div class="font-18">207.1% <i class="fa fa-caret-up"></i></div>
                                <small class="font-12 text-light">vs 1025(prev)</small>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>CTR</div>
                            <div class="mt-3 h2">1,258</div>
                            <div>
                                <div class="font-18">17.8% <i class="fa fa-caret-up"></i></div>
                                <small class="font-12 text-light">vs 2.4(prev)</small>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>Page views</div>
                            <div class="mt-3 h2">20K</div>
                            <div>
                                <div class="font-18">52.8% <i class="fa fa-caret-up"></i></div>
                                <small class="font-12 text-light">vs 12.7(prev)</small>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>Click Conversions</div>
                            <div class="mt-3 h2">58</div>
                            <div>
                                <div class="font-18">-27.6% <i class="fa fa-caret-down"></i></div>
                                <small class="font-12 text-light">vs 78(prev)</small>
                            </div>
                        </div>
                        <div class="col-xl-2 col-sm-4 mt-2 mb-3">
                            <div>View Conversions</div>
                            <div class="mt-3 h2">18</div>
                            <div>
                                <div class="font-18">-43.6% <i class="fa fa-caret-up"></i></div>
                                <small class="font-12 text-light">vs 32(prev)</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-12">
            <div class="section_title">
                <div class="mr-3">
                    <h3>Campaign Statistics</h3>
                    <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                </div>
                <div>
                    <div class="btn-group mb-3">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">All Campaign</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Campaign 1</a>
                                <a class="dropdown-item" href="javascript:void(0);">Campaign 2</a>
                                <a class="dropdown-item" href="javascript:void(0);">Campaign 3</a>
                            </div>
                        </div>
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">This Month</button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Today’s</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Week</a>
                                <a class="dropdown-item" href="javascript:void(0);">This Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Last 12 Month</a>
                                <a class="dropdown-item" href="javascript:void(0);">Custom Dates</a>
                            </div>
                        </div>
                        <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix row-deck">
        <div class="col-lg-8 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>DoubleClick Campaign Stats</h2>
                    <small class="text-muted">It is the period time a user is actively engaged with your website.</small>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg gradient">
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="pb-3">
                            <h5 class="mb-0">$356</h5>
                            <small class="text-muted font-11">Website Blog</small>
                        </div>
                        <div class="pb-3 pl-4 pr-4">
                            <h5 class="mb-0">$198</h5>
                            <small class="text-muted font-11">Social media</small>
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-default">Day</button>
                                <button type="button" class="btn btn-sm btn-default">Week</button>
                                <button type="button" class="btn btn-sm btn-primary theme-bg">Month</button>
                            </div>
                        </div>
                    </div>
                    <div id="apex-chart-line-column"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="card">
                <div class="header">
                    <h2>Lead by Country</h2>
                    <small class="text-muted">Country campaign stats show how popular</small>
                    <ul class="header-dropdown dropdown">
                        <li><a href="javascript:void(0);" class="full-screen"><i class="fa fa-expand"></i></a></li>
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg gradient">
                                <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-eye"></i> View Details</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-share-alt"></i> Share</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-copy"></i> Copy to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-folder"></i> Move to</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-edit"></i> Rename</a></li>
                                            <li><a href="javascript:void(0);"><i class="dropdown-icon fa fa-trash"></i> Delete</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <div class="pb-3">
                            <h5 class="mb-0">3056</h5>
                            <small class="text-muted font-11">Organic Search</small>
                        </div>
                        <div class="pb-3 pl-4 pr-4">
                            <h5 class="mb-0">5218</h5>
                            <small class="text-muted font-11">Referral Links</small>
                        </div>
                        <div class="ml-auto">
                            <div class="btn-group btn-group-sm">
                                <button type="button" class="btn btn-sm btn-default">D</button>
                                <button type="button" class="btn btn-sm btn-default">W</button>
                                <button type="button" class="btn btn-sm btn-primary theme-bg">M</button>
                            </div>
                        </div>
                    </div>
                    <div id="apex-basic-bar"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix row-deck">
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <div>Cost</div>
                    <div class="py-4 m-0 text-center h1">$452.20</div>
                    <div class="d-flex">
                        <small class="text-muted">Last 30 Days</small>
                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>1.4%</div>
                    </div>
                </div>
            </div>
        </div>                
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <div>Cost per Click</div>
                    <div class="py-4 m-0 text-center h1">$0.60</div>
                    <div class="d-flex">
                        <small class="text-muted">Last 30 Days</small>
                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>3.45%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <div>Cost per action</div>
                    <div class="py-4 m-0 text-center h1">$0.020</div>
                    <div class="d-flex">
                        <small class="text-muted">Last 30 Days</small>
                        <div class="ml-auto"><i class="fa fa-caret-up text-success"></i>10%</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 col-md-6">
            <div class="card">
                <div class="body">
                    <div>Click through rate</div>
                    <div class="py-4 m-0 text-center h1">5.80</div>
                    <div class="d-flex">
                        <small class="text-muted">Last 30 Days</small>
                        <div class="ml-auto"><i class="fa fa-caret-down text-danger"></i>43.20%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-12">
            <div class="section_title">
                <div class="mr-3">
                    <div class="row">
                        <div class="col-auto">
                            <label class="switch">
                                <input type="checkbox" checked="">
                                <span class="slider"></span>
                            </label>
                        </div>
                        <div class="col">
                            <h3>Email Campaigns</h3>
                            <small>Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="btn-group align-items-center">
                        <div class="fancy-checkbox">
                            <label class="mb-0"><input type="checkbox" checked=""><span>Running (3)</span></label>
                        </div>
                        <div class="fancy-checkbox">
                            <label class="mb-0"><input type="checkbox" checked=""><span>Draft (5)</span></label>
                        </div>
                        <button type="button" class="btn btn-dark">New Campaigns</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover table-custom spacing5 mb-0">
                    <tbody>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Defecting Buyers Email 1</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">1.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 45%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Defecting Buyers Email 2</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">11.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 45%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Defecting Buyers Email 3</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">8.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 63%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 24%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 63.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 24.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Defecting Buyers Email 4</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">12.1MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 71%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 8%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 71.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 8.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Defecting Buyers Email 5</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">7.6MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 23%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 41%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 23.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 41.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Facebook Campaigns list 2019</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">1.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 45%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <a href="javascript:void(0)">Twitter Campaigns at Newyork</a>
                                <p class="mb-0 text-muted">Sent on 23-Feb-2019 11:38am</p>
                            </td>
                            <td class="text-right">
                                <h6 class="font-14 mb-0">11.3MB</h6>
                                <span class="text-muted">Emails deliverd</span>
                            </td>
                            <td class="w350">
                                <div class="progress progress-xs">
                                    <div class="progress-bar theme-bg gradient-g1" style="width: 45%">
                                    </div>
                                    <div class="progress-bar theme-bg gradient-g2" style="width: 20%">
                                    </div>
                                </div>
                                <div class="d-flex bd-highlight mt-2">
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-blue"></i> 37.2% Clicks</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square text-info"></i> 12.2% Opens</small>
                                    </div>
                                    <div class="flex-fill bd-highlight">
                                        <small><i class="fa fa-check-square"></i> Deliveries</small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@stop

@section('page-styles')

@stop

@section('vendor-script')
<script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/index3.js') }}"></script>
@stop