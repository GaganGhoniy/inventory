@extends('layout.master')
@section('parentPageTitle', 'Barang Keluar')
@section('title', 'Barang Keluar')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Barang Keluar</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button data-toggle="modal" data-target="#modalBarang" type="button"
                            style="float:right; border-radius:5px;" class="btn btn-primary">Tambah Barang
                            Keluar</button>
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
                                <th>Id Transaksi</th>
                                <th>Kode Barang Keluar</th>
                                <th>Nama Barang Keluar</th>
                                <th>Customer</th>
                                <th>Jumlah Keluar</th>
                                <th>Harga</th>
                                <th>Total Harga</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no  = 1; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->id_transaksi_keluar }}</td>
                                <td>{{ $item->barang->kode_barang }}</td>
                                <td><?php echo wordwrap($item->barang->nama_barang,50,"<br>\n"); ?></td>
                                <td>{{ $item->id_customer }}</td>
                                <td>{{ $item->total_item }}</td>

                        @hasanyrole('root admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Logistik|Divisi Administrasi')
                                <td style="text-align: right;">Rp. {{ number_format($item->harga,0,'','.') }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($item->total_harga,0,'','.') }}</td>
                        @endhasanyrole
                                <td>
                                    @if($item->status == 1)
                                    Barang Berhasil Terkirim Kepada Pemesan
                                    @elseif($item->status == 2)
                                    Masih Dikirim oleh tim Divisi Logistik
                                    @elseif($item->status == 3)
                                    Dimohon Ulang Pemesanan Barang dikarenakan Data Barang/Alamat Salah
                                    @endif
                                </td>
                                <td>
                        @hasanyrole('Divisi Logistik|root admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Logistik|Divisi Administrasi')
                                    <button class="btn btn-dark" onclick="setID({{ $item->id }}, {{ $item->status }})"
                                        data-toggle="modal" data-target="#updateBarang" type="button"><i
                                            class="fa fa-arrow-right"></i></button>

                        @endhasanyrole
                                @if ($item->is_edit == 1)
                                    <button style=" border-radius:5px;" data-toggle="modal" data-target="#modalBarang"
                                        onclick="editbarang('{{ $item->id }}','{{ $item->id_customer }}','{{ $item->id_barang }}','{{ $item->total_item }}','{{ $item->persen }}')"
                                        class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            @hasanyrole('root admin|super admin|Kepala Divisi Gudang|Karyawan Divisi Gudang|Divisi Marketing|Divisi Logistik|Divisi Administrasi')
            <div class="modal fade" id="modalBarang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Barang Keluar</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="control-label">Customer</label>
                                <input type="text" placeholder="Nama Customer" id="customer" class="form-control"
                                    required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Jenis Barang</label>
                                <select id="barang" class="form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($barang as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Stok</label>
                                <input type="text" placeholder="Stok Barang" id="stok" class="form-control" disabled>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Laba</label>
                                <input type="number" placeholder="Laba" id="laba" class="form-control">
                            </div>
                            <div class="form-group">
                                <input type="hidden" id="id">
                                <label for="title" class="control-label">Jumlah Barang Keluar</label>
                                <input type="number" placeholder="Jumlah Barang Keluar" id="keluar" class="form-control"
                                    required>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanbarang()"
                                    class="btn btn-primary right" type="button">Simpan</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endhasanyrole
            <div class="modal fade" id="updateBarang" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group">
                                <input type="hidden" id="id_status">
                                <label for="title" class="control-label">Status</label>
                                <select name="status" id="status" class="form-control">
                                    <option value="">-- DIPILIH --</option>
                                    <option value="1">Terkirim</option>
                                    <option value="2">Diproses</option>
                                    <option value="3">Ditolak</option>
                                </select>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <button style="float:right; border-radius:5px;" onclick="simpanstatus()"
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
    function setID(id, status) {
   $('#id_status').val(id);
   $('#status').val(status).trigger('change');
}
function simpanbarang() {
    $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-barang-keluar',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id").value,
                "customer": document.getElementById("customer").value,
                "idbarang": document.getElementById("barang").value,
                "keluar": document.getElementById("keluar").value,
                "stok": document.getElementById("stok").value,
                "laba": document.getElementById("laba").value,
            },
        success: (response) => {
            // console.log(response);
            location.reload();
        },
        error: (error) => {
        }
    });
}

function simpanstatus() {
    $.ajax({
        type: 'PUT', //THIS NEEDS TO BE GET
        url: '/api/simpan-status-barang-keluar',
        data: {
                "_token": "{{ csrf_token() }}",
                "id"    : document.getElementById("id_status").value,
                "status": document.getElementById("status").value,
            },
        success: (response) => {
            // console.log(response);
            location.reload();
        },
        error: (error) => {
        }
    });
}

$('#barang').change(function(){
    $.ajax({
        type: 'POST', //THIS NEEDS TO BE GET
        url: '/api/get-stok',
        data: {
                "_token": "{{ csrf_token() }}",
                "idbarang": document.getElementById("barang").value,
            },
        success: (response) => {
            // console.log(response['stok'][0]);
            $('#stok').val(response['stok'][0]);
        },
        error: (error) => {
            // console.log(error);
        }
    });
});

function editbarang(id, supliyer, barang, stok, laba) {
   $('#id').val(id);
   $('#customer').val(supliyer).change();
   $('#barang').val(barang).change();
   $('#keluar').val(stok);
   $('#laba').val(laba);

}

</script>
<script>

</script>
@stop
