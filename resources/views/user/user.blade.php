@extends('layout.master')
@section('parentPageTitle', 'Pengguna')
@section('title', 'Pengguna')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Pengguna</h2>
                <ul class="header-dropdown dropdown">
                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button class="btn btn-primary" type="button" data-toggle="modal"
                            data-target="#tambahUser">Tambah</button></li>
                    {{-- <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu theme-bg">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li> --}}
                </ul>
            </div>
            <div class="modal" id="tambahUser" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Pengguna</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" id="id">
                                    <label for="phone" class="control-label">Nama</label>
                                    <input type="text" id="nama" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="phone" class="control-label">Email</label>
                                    <input type="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="phone" class="control-label">Password</label>
                                    <input type="password" id="password" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanUser()"
                                    class="btn btn-primary right" type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $r)
                            <tr data-status="approved">
                                <td>{{ $r->name }}</td>
                                <td>{{ $r->email }}</td>
                                <td><button style=" border-radius:5px;" data-toggle="modal" data-target="#tambahUser"
                                        onclick="edituser('{{ $r->id }}','{{ $r->name }}','{{ $r->email }}')"
                                        class="btn btn-warning" type="button"><i class="fa fa-pencil"></i></button>
                                    <button style=" border-radius:5px;" onclick="hapususer('{{ $r->id }}')"
                                        class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
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
<link rel="stylesheet"
    href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedcolumns.bootstrap4.min.css') }}">
<link rel="stylesheet"
    href="{{ asset('assets/vendor/jquery-datatable/fixedeader/dataTables.fixedheader.bootstrap4.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendor/sweetalert/sweetalert.css') }}">
@stop
@section('vendor-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/tables/table-filter.js') }}"></script>
@stop

@section('page-script')
<script>
    function simpanUser() {
        $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-user',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id").value,
                "nama": document.getElementById("nama").value,
                "email": document.getElementById("email").value,
                "password": document.getElementById("password").value
            },
        success: (response) => {
            location.reload();
        },
        error: (error) => {
        }
        });
    }

    function edituser(id, nama, email) {
        $('#id').val(id);
        $('#nama').val(nama);
        $('#email').val(email);
    
    }

    function hapususer(id) {
        swal({
            title: "Pemberitahuan",
            text: "Apakah Anda Ingin Menghapus User",
            showCancelButton: true,
            confirmButtonColor: "#dc3545",
            confirmButtonText: "Remove",
            cancelButtonText: "Cancel",
            closeOnConfirm: false,
            closeOnCancel: false
            }, function (isConfirm) {
                if (isConfirm) {
                    $.ajax({
                        type: 'DELETE', //THIS NEEDS TO BE GET
                        url: '/api/hapus-user',
                        data: {
                                "_token": "{{ csrf_token() }}",
                                "id": id
                            },
                        success: (response) => {
                            location.reload();
                        },
                        error: (error) => {
                        }
                    });
                } else {
                    swal("Cancelled", "Hapus Dibatalkan", "error");
                }
            });
        
    }
</script>
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
@stop