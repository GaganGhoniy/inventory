@extends('layout.master')
@section('parentPageTitle', 'Merk')
@section('title', 'Merk')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Merk</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button data-toggle="modal" data-target="#modalMerk" type="button"
                            style="float:right; border-radius:5px;" class="btn btn-primary">Tambah Merk</button>
                    </li>
                    </li>
                </ul>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Merk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no  = 1; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->merk }}</td>
                                <td><button style=" border-radius:5px;" data-toggle="modal" data-target="#modalMerk"
                                        onclick="editmerk('{{ $item->id }}','{{ $item->merk }}')"
                                        class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                    <button style=" border-radius:5px;" onclick="hapusmerk('{{ $item->id }}')"
                                        class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="modalMerk" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Merk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="control-label">Nama Merk</label>
                                <input type="hidden" id="id">
                                <input type="text" placeholder="Merk" id="merk" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanmerk()"
                                    class="btn btn-primary right" type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
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
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script>
function simpanmerk() {
    $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-merk',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id").value,
                "merk": document.getElementById("merk").value,
            },
        success: (response) => {
            location.reload();
        },
        error: (error) => {
            alert(error.responseJSON.msg);
        }
    });
}

function editmerk(id, merk) {
   $('#id').val(id);
   $('#merk').val(merk);
    
}

function hapusmerk(id) {
    swal({
        title: "Pemberitahuan",
        text: "Apakah Anda Ingin Menghapus Merk",
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
                    url: '/api/hapus-merk',
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
<script>

</script>
@stop