@extends('layout.master')
@section('parentPageTitle', 'Laporan Barang Masuk')
@section('title', 'Laporan Barang Masuk')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Laporan Barang Masuk</h2>
                    <a href="{{route('laporan.cetakmasuk')}}" type="button" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></a>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <th colspan="1" style="text-align: center;"><b>KODE BARANG</b></th>
                            <th colspan="1" style="text-align: center;"><b>NAMA BARANG</b></th>
                            <th colspan="4" style="text-align: center;"><b>BARANG MASUK</b></th>
                        </thead>
                        <tbody>
                            <?php $tot_item = 0; $tot_harga = 0; $tot_total_harga = 0; ?>
                            @foreach ($barang as $item)
                            <tr style="text-align: center;">
                                <td><b>{{ $item->kode_barang }}</b></td>
                                <td><b><?php echo wordwrap($item->nama_barang,40,"<br>\n"); ?></b></td>
                                <td><b>Unit</b></td>
                                <td><b>Harga</b></td>
                                <td><b>Total</b></td>
                            </tr>
                            <?php  $sum_item = 0; $sum_harga = 0; $sum_total_harga = 0; ?>
                            @foreach ($item->masuk as $masuk)
                            <?php 
                                $sum_item = $sum_item + $masuk->total_item;
                                $sum_harga = $sum_harga + $masuk->harga;
                                $sum_total_harga = $sum_total_harga + $masuk->total_harga;
                            ?>
                            <tr>
                                <td colspan="2" style="text-align: center;">{{ $masuk->created_at}}</td>
                                <td  style="text-align: center;">{{ $masuk->total_item }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($masuk->harga,0,'','.') }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($masuk->total_harga,0,'','.') }}</td>
                            </tr>
                            @endforeach
                            <tr>
                                <td colspan="2" style="text-align: right;"><b>Jumlah</b></td>
                                <td style="text-align: center;"><b>{{ $sum_item }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($sum_harga,0,'','.') }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($sum_total_harga,0,'','.') }}</b></td>
                            </tr>
                            <?php 
                            $tot_item = $tot_item + $sum_item;
                            $tot_harga = $tot_harga + $sum_harga;
                            $tot_total_harga = $tot_total_harga + $sum_total_harga;
                            ?>
                            @endforeach
                            <tr>
                                <td colspan="2" style="text-align: right;"><b>Total Transaksi Masuk</b></td>
                                <td style="text-align: center;"><b>{{ $tot_item }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_harga,0,'','.') }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_total_harga,0,'','.') }}</b></td>
                            </tr>
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
    @page { size: landscape; }
</style>
@stop
@section('vendor-script')
<script src="{{ asset('assets/bundles/datatablescripts.bundle.js') }}"></script>
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