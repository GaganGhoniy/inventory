@extends('layout.master')
@section('parentPageTitle', 'Laporan Persediaan Barang')
@section('title', 'Laporan Persediaan Barang')


@section('content')


    <div class="row clearfix">
        <div class="col-lg-12">
            <div class="card">
                <div class="header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Laporan Persediaan Barang</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-sm-10">
                                    <div class="d-flex float-right">
                                        <div class="form-group">
                                            <select class="form-control ml-2" aria-label="Default select example">
                                                <option selected>Pilih Tempat Penyimpanan</option>
                                                <option value="1">GUDANG 1</option>
                                                <option value="2">GUDANG 2</option>
                                                <option value="3">GUDANG 3</option>
                                              </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <a href="{{ route('laporan.cetaklaporanbarangpersediaan') }}" type="button" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr style="text-align: center;">
                                    <th><b>Kode Barang</b></th>
                                    <th><b>Merk Barang</b></th>
                                    <th><b>Nama Barang</b></th>
                                    <th><b>Tempat Penyimpanan</b></th>
                                    <th><b>Sisa Unit</b></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($barang as $item)
                                    <tr style="text-align: center;">
                                        <td>{{ $item->kode_barang }}</td>
                                        <td><b>{{ $item->merk->merk }}</b></td>
                                        <td><?php echo wordwrap($item->nama_barang, 40, "<br>\n"); ?></td>
                                        <td>{{ $item->tempat_penyimpanan }}</td>
                                        <td>{{ $item->stok }}</td>

                                        {{-- <td>Rp. {{ number_format( $item->masuk[0]->harga) }}</td>
                                <td>Rp. {{ number_format($item->stok * $item->masuk[0]->harga) }}</td> --}}
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
