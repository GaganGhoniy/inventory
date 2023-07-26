@extends('layout.master')
@section('parentPageTitle', 'Barang')
@section('title', 'Barang')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Barang</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button data-toggle="modal" data-target="#modalBarang" type="button"
                            style="float:right; border-radius:5px;" class="btn btn-primary">Tambah Barang</button>
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
                                <th>Kode Barang</th>
                                <th>Merk Barang</th>
                                <th>Nama Barang</th>
                                <th>Stok Barang</th>
                                <th>Lama Re-Stock</th>
                                <th>Kategori Barang</th>
                                <th>Nama Supliyer</th>
                                <th>Tempat Penyimpanan</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no  = 1; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->kode_barang }}</td>
                                <td>{{ $item->merk->merk }}</td>
                                <td><?php echo wordwrap($item->nama_barang,50,"<br>\n"); ?></td>
                                <td>{{ $item->stok }}@if($item->stok < $item->safety_stock)<span style="color: red"> dimohon menambahkan stok barang dikarenakan stok kurang dari {{ $item->safety_stock }} </span>@endif</td>
                                <td>{{ $item->kategori->lama_restok }} Hari</td>
                                <td>{{ $item->kategori->kategori }}</td>
                                <td>{{ $item->supliyer->nama }}</td>
                                <td>{{ $item->tempat_penyimpanan }}</td>
                                <td><button style=" border-radius:5px;" data-toggle="modal" data-target="#modalBarang"
                                        onclick="editbarang('{{ $item->id }}','{{ $item->nama_barang }}','{{ $item->id_kategori }}','{{ $item->id_merk }}','{{ $item->tempat_penyimpanan }}','{{ $item->id_supliyer }}','{{ $item->safety_stock }}')"
                                        class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                    <button style=" border-radius:5px;" onclick="hapusbarang('{{ $item->id }}')"
                                        class="btn btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="control-label">Kategori Barang</label>
                                <select id="kategori" class="form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($kat as $k)
                                        <option value="{{ $k->id }}">{{ $k->kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Merk Barang</label>
                                <select id="merk" class="form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($merk as $m)
                                        <option value="{{ $m->id }}">{{ $m->merk }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Nama Supliyer</label>
                                <select id="supliyer" class="form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($supliyer as $s)
                                        <option value="{{ $s->id }}">{{ $s->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Nama Barang</label>
                                <input type="hidden" id="id">
                                <input type="text" placeholder="Nama Barang" id="nama" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Tempat Penyimpanan Barang</label>
                                <input type="text" placeholder="Tempat Penyimpanan Barang" id="tempat" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Jumlah Safety Stock</label>
                                <input type="number" placeholder="0" id="safety" class="form-control" required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanbarang()"
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
function simpanbarang() {
    $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-barang',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id").value,
                "nama": document.getElementById("nama").value,
                "kat": document.getElementById("kategori").value,
                "merk": document.getElementById("merk").value,
                "tempat": document.getElementById("tempat").value,
                "supliyer": document.getElementById("supliyer").value,
                "safety": document.getElementById("safety").value,
            },
        success: (response) => {
            location.reload();
        },
        error: (error) => {
        }
    });
}

function editbarang(id, nama, kat, merk,tempat,supliyer,safety) {
   $('#id').val(id);
   $('#nama').val(nama);
   $('#kategori').val(kat).change();
   $('#merk').val(merk).change();
   $('#supliyer').val(supliyer).change();
   $('#tempat').val(tempat);
   $('#safety').val(safety);

}

function hapusbarang(id) {
    swal({
        title: "Pemberitahuan",
        text: "Apakah Anda Ingin Menghapus Barang",
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
                    url: '/api/hapus-barang',
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
@stop
