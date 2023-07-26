@extends('layout.master')
@section('parentPageTitle', 'Pages')
@section('title', 'Search Results')


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
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="form-group c_form_group">
                    <label>What do you want to find?</label>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search here...">
                        <div class="input-group-append"><button class="btn btn-dark" type="button">Search</button></div>
                    </div>
                </div>
                <ul class="list-inline mt-2 mb-0">
                    <li class="list-inline-item"><a href="javascript:void(0);">Angular</a></li>
                    <li class="list-inline-item"><a href="javascript:void(0);">Reacte</a></li>
                    <li class="list-inline-item"><a href="javascript:void(0);">Laravel</a></li>
                    <li class="list-inline-item"><a href="javascript:void(0);">Bootstrap</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="section_title">
            <div class="mr-3">
                <h3>Search results</h3>
                <small> About <span class="text-orange">12,284</span> result ( 0.17 seconds )</small>
            </div>
            <div>
                <ul class="nav nav-tabs2">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Clasic-search">Clasic</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Articles-search">Articles</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Photos-search">Photos</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Users-search">Users</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="body">
                <div class="tab-content mt-0">
                    <div class="tab-pane show active" id="Clasic-search">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Crush it - Bootstrap Admin Application Template & Ui Kit</a></h6>
                                <p class="text-muted">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-secondary">React</span></li>
                                        <li class="list-inline-item">Dec 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Epic Pro - HR & Project Management Admin Template and UI Kit</a></h6>
                                <p class="text-muted">he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-success">HTML</span></li>
                                        <li class="list-inline-item">Oct 13 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Qubes - Responsive Admin Dashboard Template</a></h6>
                                <p class="text-muted">Commodo excepteur non ut aliqua ex qui velit sed esse consequat in </p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-danger">Bootstrap</span></li>
                                        <li class="list-inline-item">Sep 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Oculux UI - Laravel Admin Dashboard Template</a></h6>
                                <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-primary">Laravel</span></li>
                                        <li class="list-inline-item">Dec 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item p-l-0 p-r-0">
                                <h6><a href="javascript:void(0);">Oculux - Bootstrap 4.4.1 Admin Dashboard Template & UI KIT</a></h6>
                                <p class="text-muted">It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                <div class="text-muted font-13">
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><span class="badge badge-warning">HTML</span></li>
                                        <li class="list-inline-item">Dec 27 2020</li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-pane" id="Articles-search">
                        <div class="row">
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-azura">Work</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/1.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-azura">Work</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/2.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-red">News</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/3.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-blue">Photograph</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/4.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-blue">Photograph</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-indigo">Technology</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/6.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-orange">Sports</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/7.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lx-3 col-lg-4 col-md-6">
                                <div class="card border n_category">
                                    <span class="sub_n_category bg-info">Design</span>
                                    <img class="card-img-top" src="{{ asset('assets/images/image-gallery/8.jpg') }}" alt="Card image cap">
                                    <div class="card-body">
                                        <h5 class="card-title"><a href="javascript:void(0);">'I cried when asked to be cover model'</a></h5>
                                        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
                                        <p class="card-text"><small class="text-muted">Last updated 13 mins ago</small></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Photos-search">
                        <div id="lightgallery" class="row clearfix lightGallery">
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/1.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/1.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/2.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/2.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/3.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/3.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/4.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/4.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/5.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/5.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/6.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/6.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/7.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/7.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/8.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/8.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/9.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/9.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/10.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/10.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/11.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/11.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/12.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/12.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/13.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/13.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/14.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/14.jpg') }}" alt=""></a></div>
                            <div class="col-lg-3 col-md-6 m-b-15"><a class="light-link" href="{{ asset('assets/images/image-gallery/15.jpg') }}"><img class="img-fluid" src="{{ asset('assets/images/image-gallery/15.jpg') }}" alt=""></a></div>
                        </div>
                    </div>
                    <div class="tab-pane" id="Users-search">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <tbody>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar1.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Jason Porter</a>
                                            <p class="mb-0">+ 264-625-5858</p>
                                        </td>
                                        <td>
                                            <span>jason-porter@example.com</span>
                                        </td>
                                        <td>
                                            <span>123 6th St. Melbourne, FL 32904</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar2.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Denise Elliott</a>
                                            <p class="mb-0">+ 264-625-4523</p>
                                        </td>
                                        <td>
                                            <span>denise-elliott@example.com</span>
                                        </td>
                                        <td>
                                            <span>514 S. Magnolia St. Orlando, FL 32806</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar3.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Rose Coke</a>
                                            <p class="mb-0">+ 264-625-2583</p>
                                        </td>
                                        <td>
                                            <span>rose-coke@example.com</span>
                                        </td>
                                        <td>
                                            <span>44 Shirley Ave. West Chicago, IL 60185</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar4.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Grace Knight</a>
                                            <p class="mb-0">+ 264-625-2583</p>
                                        </td>
                                        <td>
                                            <span>grace-knight@example.com</span>
                                        </td>
                                        <td>
                                            <span>70 Bowman St. South Windsor, CT 06074</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar5.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Elizabeth Martin</a>
                                            <p class="mb-0">+ 264-625-2341</p>
                                        </td>
                                        <td>
                                            <span>Elizabeth-Martin@example.com</span>
                                        </td>
                                        <td>
                                            <span>123 6th St. Melbourne, FL 32904</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar6.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Denise Alvarado</a>
                                            <p class="mb-0">+ 264-625-7262</p>
                                        </td>
                                        <td>
                                            <span>denise-Alvarado@example.com</span>
                                        </td>
                                        <td>
                                            <span>514 S. Magnolia St. Orlando, FL 32806</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar7.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Terry Carter</a>
                                            <p class="mb-0">+ 264-625-9283</p>
                                        </td>
                                        <td>
                                            <span>Carol-coke@example.com</span>
                                        </td>
                                        <td>
                                            <span>44 Shirley Ave. West Chicago, IL 60185</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="w60">
                                            <img src="{{ asset('assets/images/xs/avatar8.jpg') }}" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="rounded-circle w35" data-original-title="Avatar Name">
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" title="">Michelle Schultz</a>
                                            <p class="mb-0">+ 264-625-2233</p>
                                        </td>
                                        <td>
                                            <span>Michelle-Schultz@example.com</span>
                                        </td>
                                        <td>
                                            <span>70 Bowman St. South Windsor, CT 06074</span>
                                        </td>
                                        <td>
                                            <button class="btn btn-primary theme-bg btn-sm">Follow</button>
                                            <button class="btn btn-dark btn-sm">Message</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Previous</a></li>
                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                <li class="page-item"><a class="page-link" href="javascript:void(0);">Next</a></li>
            </ul>
        </nav>
    </div>
</div>

@stop

@section('page-styles')
<link rel="stylesheet" href="{{ asset('assets/vendor/light-gallery/css/lightgallery.css') }}">
@stop

@section('vendor-script')
<script src="{{ asset('assets/vendor/light-gallery/js/lightgallery-all.min.js') }}"></script>
<script src="{{ asset('assets/vendor/light-gallery/js/mousewheel.min.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/pages/medias/image-gallery.js') }}"></script>
@stop