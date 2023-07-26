@extends('layout.master')
@section('parentPageTitle', 'Laporan Barang Butuh Re-Stok')
@section('title', 'Laporan Barang Butuh Re-Stok')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Laporan Barang Butuh Re-Stok </h2>
                <ul class="header-dropdown dropdown" id="tes2">

                    <li><button type="button" id="print" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></button>
                    </li>
                </ul>
            </div>

            <div class="body">
                <div>
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <tr style="text-align: center;">
                                <th><b>Kode Barang</b></th>
                                <th><b>Nama Barang</b></th>
                                <th><b>Sisa Unit</b></th>
                                <th><b>Jumlah Safety Stok</b></th>
                                <th><b>Lama Re-Stok</b></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($barang as $item)
                            <tr style="text-align: center;">
                                <td>{{ $item->kode_barang }}</td>
                                <td><?php echo wordwrap($item->nama_barang,35,"<br>\n"); ?></td>
                                <td>{{ $item->stok }}</td>
                                <td>{{ $item->safety_stock }}</td>
                                <td>{{ $item->kategori->lama_restok }} Hari</td>
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
<style>
    @page { size: potrait;
            font-size: 10px; }
</style>
@stop
@section('vendor-script')
{{-- <script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script> --}}
<script src="{{ asset('assets/vendor/sweetalert/sweetalert.min.js') }}"></script>
@stop

@section('page-script')
<script src="{{ asset('assets/js/pages/tables/jquery-datatable.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script>
    $('#print').on('click', function() {
            $(this).parents('.card').toggleClass('fullscreen');
            $(this).hide();
            window.print();
            location.reload();
    });
    </script>
@stop