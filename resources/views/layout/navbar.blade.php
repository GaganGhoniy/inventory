<nav class="navbar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-left">
                <div class="navbar-btn">
                    <a href="index.html"><img src="{{ asset('assets/images/icon.svg') }}" alt="Mooli Logo" class="img-fluid logo"></a>
                    <button type="button" class="btn-toggle-offcanvas"><i class="fa fa-align-left"></i></button>
                </div>
                <form id="navbar-search" class="navbar-form search-form">
                    <button type="button" class="btn btn-default"><i class="icon-magnifier"></i></button>
                    <input value="" class="form-control" placeholder="Search here..." type="text">                    
                </form>
            </div>
            <div class="navbar-right">
                <div id="navbar-menu">
                    <ul class="nav navbar-nav">
                        <li><a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="icon-menu"><i class="fa fa-power-off"></i></a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
            </div>
            <div class="recent_searche" style="display: none;">
                <div class="card mb-0">
                    <div class="header">
                        <h2>Recent search result</h2>
                        <ul class="header-dropdown dropdown">
                            <li><a href="javascript:void(0);">Clear data</a></li>
                            <li><a href="javascript:void(0);"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                    <div class="body">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Crush it - Bootstrap Admin Application Template &amp; Ui Kit</a></h6>
                                <p class="text-muted">It is a long established fact that a reader will be distracted.</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-secondary margin-0">React</span></li>
                                        <li class="list-inline-item">Dec 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Epic Pro - HR &amp; Project Management Admin Template and UI Kit</a></h6>
                                <p class="text-muted">he point of using Lorem Ipsum is that it has a more-or-less English.</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-success margin-0">HTML</span></li>
                                        <li class="list-inline-item">Oct 13 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Qubes - Responsive Admin Dashboard Template</a></h6>
                                <p class="text-muted">Commodo excepteur non ut aliqua ex qui velit sed esse consequat in </p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-danger margin-0">Bootstrap</span></li>
                                        <li class="list-inline-item">Sep 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>