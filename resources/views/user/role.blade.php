@extends('layout.master')
@section('parentPageTitle', 'Tables')
@section('title', 'Kontrol Peran')


@section('content')
<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Kontrol Peran</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button class="btn btn-primary" type="button" data-toggle="modal"
                            data-target="#tambahPeran">Tambah Peran</button></li>
                </ul>
            </div>
            <div class="modal" id="tambahPeran" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Peran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="form-group">
                                    <input type="hidden" id="id_peran">
                                    <label for="phone" class="control-label">Nama Peran</label>
                                    <input type="text" id="nama_peran" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanPeran()"
                                    class="btn btn-primary right" type="button">Simpan Peran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="{{ url('/api/simpan-plot-user') }}" method="POST" enctype="multipart/form-data">
                <div class="body">

                    <div class="row clearfix">
                        @csrf
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Nama</label>
                                <select name="id" id="id" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($user as $u)
                                    <option value="{{ $u->id }}">{{ $u->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="form-group">
                                <label for="phone" class="control-label">Peran</label>
                                <select name="role" id="role" class="form-control">
                                    <option value="">-- Pilih --</option>
                                    @foreach ($role as $r)
                                    <option value="{{ $r->name  }}">{{ $r->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <button style="float:right; border-radius:5px;" class="btn btn-primary right"
                                type="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Roles Table</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Roles</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>@foreach ($item->rule as $key => $cok)
                                    <span class="badge badge-dark">{{ $cok->role->name }}</span>
                                    <input type="hidden" id="{{ $item->id }}_{{ $key }}" value="{{ $cok->role->name }}">
                                    @endforeach
                                </td>
                                <td><button style=" border-radius:5px;" class="btn btn-warning" title="Ubah"
                                        onclick="edit({{ $item->id }}, {{ count($item->rule) }})" type="submit"><i
                                            class="fa fa-pencil"></i></button></td>
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
<link rel="stylesheet" href="{{ asset('assets/css/select2.min.css') }}">
@stop
@section('vendor-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
<script>
    $('#role').select2();
    
    $('#id').select2();
    
    function edit(id, roles) {
        let jumlahRole = []
        for (let i = 0; i < roles; i++) {
           jumlahRole.push(document.getElementById(`${id}_${i}`).value )
        }
       
        var nama = document.getElementById('id');
        $(nama).val(id).change();
        
        var role = document.getElementById('role');
        $(role).val(jumlahRole).change();
    }

    function simpanPeran() {
        $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-peran',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id_peran").value,
                "nama": document.getElementById("nama_peran").value,
            },
        success: (response) => {
            location.reload();
        },
        error: (error) => {
        }
        });
    }
</script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
@stop