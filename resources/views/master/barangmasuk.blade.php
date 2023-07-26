@extends('layout.master')
@section('parentPageTitle', 'Barang Masuk')
@section('title', 'Barang Masuk')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Barang Masuk</h2>
                <ul class="header-dropdown dropdown">

                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-frame"></i></a></li>
                    <li><button data-toggle="modal" data-target="#modalBarang" type="button"
                            style="float:right; border-radius:5px;" class="btn btn-primary">Tambah Barang Masuk</button>
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
                                <th>Kode Barang Masuk</th>
                                <th>Nama Barang Masuk</th>
                                <th>Stok Awal</th>
                                <th>Jumlah Masuk</th>
                                <th>Harga Masuk</th>
                                <th>Total Harga</th>
                                <th>Stok Akhir</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no  = 1; ?>
                            @foreach ($data as $item)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $item->id_transaksi }}</td>
                                <td>{{ $item->barang->kode_barang }}</td>
                                <td><?php echo wordwrap($item->barang->nama_barang,50,"<br>\n"); ?></td>
                                <td>{{ $item->stok_awal }}</td>
                                <td>{{ $item->total_item }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($item->harga,0,'','.') }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($item->total_harga,0,'','.') }}</td>
                                <td>{{ $item->stok_awal + $item->total_item }}</td>
                                <td>
                                    @if ($item->is_edit == 1)
                                    <button style=" border-radius:5px;" data-toggle="modal" data-target="#modalBarang"
                                        onclick="editbarang('{{ $item->id }}','{{ $item->id_supliyer }}','{{ $item->id_barang }}','{{ $item->harga }}','{{ $item->total_item }}','{{ $item->lama_restok }}')"
                                        class="btn btn-primary" type="button"><i class="fa fa-pencil"></i></button>
                                    @endif
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
                            <h5 class="modal-title h4" id="myLargeModalLabel">Tambah Barang Masuk</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                    aria-hidden="true">×</span></button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="title" class="control-label">Nama Barang</label>
                                <select id="barang" class="form-control">
                                    <option value="">-- PILIH --</option>
                                    @foreach ($barang as $b)
                                    <option value="{{ $b->id }}">{{ $b->nama_barang }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Supliyer</label>
                                <select id="supliyer" class="form-control">
                                    <option value="">-- PILIH --</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="title" class="control-label">Lama Restok</label>
                                <input type="number" placeholder="Lama Restok" id="restok" class="form-control"
                                    required readonly>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Stok Saat Ini</label>
                                <input type="number" placeholder="Stok Saat Ini" id="stoksaatini" class="form-control"
                                    required readonly>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Harga</label>
                                <input type="hidden" id="id">
                                <input type="text" placeholder="Harga Barang" id="harga" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="title" class="control-label">Stok</label>
                                <input type="text" placeholder="Stok Barang" id="stok" class="form-control" required>
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
        url: '/api/simpan-barang-masuk',
        data: {
                "_token": "{{ csrf_token() }}",
                "id": document.getElementById("id").value,
                "supliyer": document.getElementById("supliyer").value,
                "barang": document.getElementById("barang").value,
                "restok": document.getElementById("restok").value,
                "harga": document.getElementById("harga").value,
                "stok": document.getElementById("stok").value,
            },
        success: (response) => {
            // console.log(response);
            location.reload();
        },
        error: (error) => {
        }
    });
}

function editbarang(id, supliyer, barang, harga, stok,restok) {
   $('#id').val(id);
   $('#supliyer').val(supliyer).change();
   $('#barang').val(barang).change();
   $('#restok').val(restok);
   $('#harga').val(harga);
   $('#stok').val(stok);
    
}

$("#barang").change(function() {
                $.ajax({
                    type: 'POST',
                    url: '/api/control',
                    data: {
                        "_token": "{{ csrf_token() }}",
                        "id": document.getElementById("barang").value,
                        "jenis": 'supliyer'
                    },
                    success: function(response) {
                        $("#supliyer").empty();
                        $("#restok").empty();
                        // console.log(response.stok);
                            $.each(response.supliyer, function(nama, id) {
                                var mySelect = document.getElementById(
                                    "supliyer")
                                opt = document.createElement('option');
                                opt.value = id;
                                opt.innerHTML = nama;
                                mySelect.appendChild(opt);
                            })

                            $.each(response.kat, function(lama_restok, id) {
                                document.getElementById("restok").value = lama_restok
                            })

                            document.getElementById("stoksaatini").value = response.stok
                        
                    },
                    failure: function(response) {
                        alert('error code(1) upload');
                    },
                    error: function(response) {
                        console.log(response);
                        alert('error code(2) upload');
                    }
                });
            });
</script>
@stop