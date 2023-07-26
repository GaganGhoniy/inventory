@extends('layout.master')
@section('parentPageTitle', 'Dashboard')
@section('title', 'Cryptocurrency')


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
                        <a href="javascript:void(0);" class="btn btn-default">Market Cap</a>
                        <a href="javascript:void(0);" class="btn btn-default">Trading</a>
                        <a href="javascript:void(0);" class="btn btn-default">Wallet</a>
                        <a href="javascript:void(0);" class="btn btn-dark">Buy this item</a>
                    </div>
                </div>
            </nav>
        </div>
        <div class="col-12">
            <div class="card theme-bg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider1" class="carousel vert slide" data-ride="carousel" data-interval="2700">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Total Income</div>
                                                <div class="mt-3 h1">$13,025</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">3.78% <i class="fa fa-caret-down"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Total Revenue</div>
                                                <div class="mt-3 h1">$9,452</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.85% <i class="fa fa-caret-up"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Total Expense</div>
                                                <div class="mt-3 h1">$4,124</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">2.04% <i class="fa fa-caret-down"></i></div>
                                                    <span>This year</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider2" class="carousel vert slide" data-ride="carousel" data-interval="2800">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Total User</div>
                                                <div class="mt-3 h1">1,258</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">7% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Sessions</div>
                                                <div class="mt-3 h1">451</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">23.5% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Bounce Rate</div>
                                                <div class="mt-3 h1">36.80</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">5% <i class="fa fa-caret-up"></i></div>
                                                    <span>This month</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider3" class="carousel vert slide" data-ride="carousel" data-interval="3000">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Bitcoin Wallet</div>
                                                <div class="mt-3 h1">4.25762</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">5.23% <i class="fa fa-caret-up"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Ethereum Wallet</div>
                                                <div class="mt-3 h1">3.15948</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">1.85% <i class="fa fa-caret-up"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>NioWallet</div>
                                                <div class="mt-3 h1">2.75342</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">1.25% <i class="fa fa-caret-down"></i></div>
                                                    <span>This Week</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div id="slider4" class="carousel vert slide" data-ride="carousel" data-interval="2500">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div>Number of Meetings</div>
                                                <div class="mt-3 h1">781</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                    <span>(30 days)</span>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div>Number of Clients</div>
                                                <div class="mt-3 h1">10K</div>
                                                <div class="d-flex">
                                                    <div class="mr-3">0.56% <i class="fa fa-caret-up"></i></div>
                                                    <span>(30 days)</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
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
                    <div class="row">
                        <div class="col-auto">
                            <div class="stamp stamp-md bg-warning">
                                <i class="fa fa-bitcoin"></i>
                            </div>
                        </div>
                        <div class="col">
                            <h3>Crypto Statistics</h3>
                            <small>Statistics, Predictive Analytics Data Visualization, Big Data Analytics, etc.</small>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="btn-group mb-3">
                        <div class="btn-group" role="group">
                            <button id="btnGroupDrop1" type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">14 March 2020</button>
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
                        <button type="button" class="btn btn-default"><i class="fa fa-send"></i> <span class="hidden-md">Report</span></button>
                        <button type="button" class="btn btn-default"><i class="fa fa-file-pdf-o"></i> <span class="hidden-md">Export</span></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div id="apexspark1"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div id="apexspark2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div id="apexspark3"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="d-md-flex justify-content-between">
                        <div>
                            <h5 class="mb-1">BTC $<span class="counter">12,159.32</span></h5>
                            <span class="text-muted">Note Enim omittam, ex quo dictas complectitur<a href="javascript:void(0);">View more</a></span>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                    <div id="apex-Crypto_statistics"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">ICO Token</label>
                                        <input type="email" class="form-control" placeholder="23097">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">ETH</label>
                                        <input type="email" class="form-control" placeholder="2">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">Select</label>
                                        <select class="form-control">
                                            <option selected="">ETH</option>
                                            <option value="1">BTC</option>
                                            <option value="2">LTC</option>
                                            <option value="3">USDT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">Wallet address</label>
                                        <input type="email" class="form-control" placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-success btn-block">Buy now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">ICO Token</label>
                                        <input type="email" class="form-control" placeholder="23097">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">ETH</label>
                                        <input type="email" class="form-control" placeholder="2">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">Select</label>
                                        <select class="form-control">
                                            <option selected="">ETH</option>
                                            <option value="1">BTC</option>
                                            <option value="2">LTC</option>
                                            <option value="3">USDT</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group c_form_group">
                                        <label class="form-label">Wallet address</label>
                                        <input type="email" class="form-control" placeholder="0OXD38D9EEB5B93E1D3862727635E9">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-danger btn-block">Sale now</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row clearfix">
        <div class="col-12">
            <div class="card bg-clear">
                <div class="header">
                    <ul class="nav nav-tabs3">
                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Active-Orders">Active Orders</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Closed-Orders">Closed Orders</a></li>
                    </ul>
                    <ul class="header-dropdown dropdown">
                        <li class="dropdown">
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                            <ul class="dropdown-menu theme-bg">
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
                <div class="body">
                    <div class="tab-content mt-0">
                        <div class="tab-pane show active" id="Active-Orders">
                            <div class="table-responsive">
                                <table class="table table-hover text-wrap table-custom spacing5 mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/qtum.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Qtum</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 QTUM</strong></td>
                                            <td class="w100 text-info"><strong>$3,102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/XRP.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Tether</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 USDT</strong></td>
                                            <td class="w100 text-info"><strong>$102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/ETH.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Ethereum Classic</p></td>
                                            <td><span>11:20AM 17 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-warning">Processing</span></td>
                                            <td><strong>0.108762 ETC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/ETC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Ethereum</p></td>
                                            <td><span>11:20AM 17 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 ETH</strong></td>
                                            <td class="w100 text-info"><strong>$11,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/neo.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">NEO</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 NEO</strong></td>
                                            <td class="w100 text-info"><strong>$3,102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>                                    
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/LTC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Litecoin</p></td>
                                            <td><span>11:20AM 7 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-danger">Stopped</span></td>
                                            <td><strong>0.108762 LTC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/qtum.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Qtum</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 QTUM</strong></td>
                                            <td class="w100 text-info"><strong>$3,102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane" id="Closed-Orders">
                            <div class="table-responsive">
                                <table class="table table-hover text-wrap table-custom spacing5 mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/BTC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Bitcoin</p></td>
                                            <td><span>11:20AM 17 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 BTC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/ETH.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Ethereum Classic</p></td>
                                            <td><span>11:20AM 17 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-warning">Processing</span></td>
                                            <td><strong>0.108762 ETC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/ETC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Ethereum</p></td>
                                            <td><span>11:20AM 17 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 ETH</strong></td>
                                            <td class="w100 text-info"><strong>$11,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/neo.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">NEO</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 NEO</strong></td>
                                            <td class="w100 text-info"><strong>$3,102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>                                    
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/LTC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Litecoin</p></td>
                                            <td><span>11:20AM 7 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-danger">Stopped</span></td>
                                            <td><strong>0.108762 LTC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/LTC.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Litecoin</p></td>
                                            <td><span>11:20AM 7 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-danger">Stopped</span></td>
                                            <td><strong>0.108762 LTC</strong></td>
                                            <td class="w100 text-info"><strong>$8,309</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                        <tr>
                                            <td class="w60"><img src="{{ asset('assets/images/coin/qtum.svg') }}" alt="" class="w30 rounded"></td>
                                            <td><p class="mb-0">Qtum</p></td>
                                            <td><span>12:20PM 5 Nov 2018</span></td>
                                            <td><span>OX874JKHJKFG76767DFD67</span></td>
                                            <td><span class="badge badge-success">Completed</span></td>
                                            <td><strong>0.108762 QTUM</strong></td>
                                            <td class="w100 text-info"><strong>$3,102</strong></td>
                                            <td><button type="button" class="btn btn-default btn-sm mb-0"><span>View</span></button></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="{{ asset('assets/js/index2.js') }}"></script>
@stop