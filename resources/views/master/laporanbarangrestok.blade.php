@extends('layout.master')
@section('parentPageTitle', 'Laporan Barang Butuh Re-Stok')
@section('title', 'Laporan Barang Butuh Re-Stok')


@section('content')


    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Laporan Barang Butuh Re-Stok </h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-10">
                                    <form action="{{ route('laporan.restok.search') }}" method="post">
                                        @csrf
                                        <div class="d-flex float-right">
                                            <div class="form-group">
                                                <input type="search" name="search" class="form-control"
                                                    placeholder="Cari data">
                                            </div>

                                            <div class="button-search ml-2">
                                                <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                        </div>
                                </div>
                                </form>
                                <div class="col-sm-2">
                                    
                                    <a href="{{ route('laporan.cetaklaporanBarangRestok', ['search' => $searchKeyword]) }}" type="button" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <ul class="header-dropdown dropdown" id="tes2">

                        <li>
                        </li>
                    </ul> --}}
                </div>

                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr style="text-align: center;">
                                    <th><b>Kode Barang</b></th>
                                    <th><b>Merk Barang</b></th>
                                    <th><b>Nama Barang</b></th>
                                    <th><b>Supplier</b></th>
                                    <th><b>Sisa Unit</b></th>
                                    <th><b>Jumlah Safety Stok</b></th>
                                    <th><b>Lama Re-Stok</b></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($barang as $item)
                                    @if ((int) $item->stok <= (int) $item->safety_stock)
                                        <tr style="text-align: center;">
                                            <td>{{ $item->kode_barang }}</td>
                                            <td><b>{{ $item->merk->merk }}</b></td>
                                            <td><?php echo wordwrap($item->nama_barang, 35, "<br>\n"); ?></td>
                                            <td><?php echo wordwrap($item->supliyer->nama, 35, "<br>\n"); ?></td>
                                            <td>{{ $item->stok }}</td>
                                            <td>{{ $item->safety_stock }}</td>
                                            <td>{{ $item->kategori->lama_restok }} Hari</td>
                                        </tr>
                                    @endif
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
        @page {
            size: potrait;
            font-size: 10px;
        }
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
