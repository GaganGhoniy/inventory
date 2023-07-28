@extends('layout.master')
@section('parentPageTitle', 'Laporan Transaksi Barang')
@section('title', 'Laporan Transaksi Barang')


@section('content')


<div class="row clearfix" id="tes">
    <div class="col-lg-12">
        <div class="card" >
            <div class="header">
                <h2>Laporan Transaksi Barang</h2>
                <ul class="header-dropdown dropdown" id="tes2">

                    <li><button type="button" id="print" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></button>
                    </li>
                </ul>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable" style="border: 1px solid;">
                        <thead>
                            <th colspan="1" style="text-align: center;"><b>KODE BARANG</b></th>
                            <th colspan="1" style="text-align: center;"><b>NAMA BARANG</b></th>
                            <th colspan="3" style="text-align: center;"><b>BARANG MASUK</b></th>
                            <th colspan="4" style="text-align: center;"><b>BARANG KELUAR</b></th>
                            <th colspan="3" style="text-align: center;"><b>TOTAL AKHIR SISA BARANG</b></th>
                        </thead>
                        <tbody>
                            <?php $tot_item = 0; $tot_harga = 0; $tot_total_harga = 0; $tot_item_kel = 0; $tot_harga_kel = 0; $tot_total_harga_kel = 0; $tot_item_sis = 0;  $tot_total_harga_sis = 0;?>
                            @foreach ($barang as $item)
                                <tr style="text-align: center;">
                                    <td ><b>{{ $item->kode_barang }}</b></td>
                                    <td><b><?php echo wordwrap($item->nama_barang,30,"<br>\n"); ?></b></td>
                                    <td><b>Unit</b></td>
                                    <td><b>Harga</b></td>
                                    <td><b>Total</b></td>
                                    <td><b>Unit</b></td>
                                    <td><b>Laba</b></td>
                                    <td><b>Harga</b></td>
                                    <td><b>Total</b></td>
                                    <td><b>Sisa Unit</b></td>
                                    <td><b>Harga</b></td>
                                    <td><b>Total</b></td>
                                </tr>
                                <?php  $sum_item = 0; $sum_harga = 0; $sum_total_harga = 0; $sum_item_kel = 0; $sum_harga_kel = 0; $sum_total_harga_kel = 0; $sum_item_sis = 0; $sum_total_harga_sis = 0;?>
                                @foreach ($item->masuk as $masuk)
                                <?php
                                    $sum_item = $sum_item + $masuk->total_item;
                                    $sum_harga = $sum_harga + $masuk->harga;
                                    $sum_total_harga = $sum_total_harga + $masuk->total_harga;
                                    // $sum_item_sis = $sum_item_sis + $masuk->stok_akhir;
                                    $sum_total_harga_sis = $sum_total_harga_sis +($masuk->stok_akhir * $masuk->harga);
                                ?>
                                <tr>
                                    <td colspan="2" style="text-align: center;">{{ $masuk->created_at}}</td>
                                    <td style="text-align: center;">@if($masuk){{ $masuk->total_item }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($masuk)Rp. {{ number_format($masuk->harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($masuk)Rp. {{ number_format($masuk->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: center;">0</td>
                                    <td style="text-align: center;">0%</td>
                                    <td style="text-align: right;">Rp. 0</td>
                                    <td style="text-align: right;">Rp. 0</td>
                                    <td style="text-align: center;">@if($masuk){{ $masuk->total_item }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($masuk)Rp. {{ number_format($masuk->harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($masuk)Rp. {{ number_format($masuk->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
                                </tr>
                                @endforeach
                                @foreach ($item->keluar as $keluar)
                                <?php
                                    $sum_item_kel = $sum_item_kel + $keluar->total_item;
                                    $sum_harga_kel = $sum_harga_kel + $keluar->harga;
                                    $sum_total_harga_kel = $sum_total_harga_kel + $keluar->total_harga;
                                ?>
                                <tr>
                                    <td colspan="2" style="text-align: center;">{{ $keluar->created_at}}</td>
                                    <td style="text-align: center;">0</td>
                                    <td style="text-align: right;">Rp. 0</td>
                                    <td style="text-align: right;">Rp. 0</td>
                                    <td style="text-align: center;">@if($keluar){{ $keluar->total_item }} @else Rp. 0 @endif</td>
                                    <td style="text-align: center;">@if($keluar->persen != null){{ $keluar->persen }}% @else 0% @endif</td>
                                    <td style="text-align: right;">@if($keluar)Rp. {{ number_format($keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($keluar)Rp. {{ number_format($keluar->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: center;">@if($keluar){{ $keluar->stok_akhir }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($keluar)Rp. {{ number_format($keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
                                    <td style="text-align: right;">@if($keluar)Rp. {{ number_format($keluar->stok_akhir * $keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
                                </tr>
                                @endforeach
                                <?php
                                    // $sum_total_harga_sis = $sum_total_harga_kel - $sum_total_harga;
                                    // $sum_total_harga_sis = $sum_total_harga * $sum_item_sis;
                                ?>
                                <tr>
                                    <td colspan="2" style="text-align: right;"><b>Jumlah</b></td>
                                    <td style="text-align: center;"><b>{{ $sum_item }}</b></td>
                                    <td style="text-align: right;">
                                        {{-- <b>Rp. {{ number_format($sum_harga,0,'','.') }}</b> --}}
                                    </td>
                                    <td style="text-align: right;"><b>Rp. {{ number_format($sum_total_harga,0,'','.') }}</b></td>
                                    <td style="text-align: center;"><b>{{ $sum_item_kel }}</b></td>
                                    <td><b></b></td>
                                    <td style="text-align: right;"><b>Rp. {{ number_format($sum_harga_kel,0,'','.') }}</b></td>
                                    <td style="text-align: right;"><b>Rp. {{ number_format($sum_total_harga_kel,0,'','.') }}</b></td>
                                    <td style="text-align: center;"><b>{{ $sum_item_sis = $sum_item-$sum_item_kel }}</b></td>
                                    <td><b></b></td>
                                    <td style="text-align: right;"><b>Rp. {{ number_format($sum_total_harga_sis,0,'','.') }}</b></td>
                                </tr>
                                <?php
                                $tot_item = $tot_item + $sum_item;
                                $tot_harga = $tot_harga + $sum_harga;
                                $tot_total_harga = $tot_total_harga + $sum_total_harga;
                                $tot_item_kel = $tot_item_kel + $sum_item_kel;
                                $tot_harga_kel = $tot_harga_kel + $sum_harga_kel;
                                $tot_total_harga_kel = $tot_total_harga_kel + $sum_total_harga_kel;
                                $tot_item_sis = $tot_item_sis + $sum_item_sis;
                                $tot_total_harga_sis = $tot_total_harga_sis + $sum_total_harga_sis;
                                ?>
                            @endforeach

                            <tr>
                                <td colspan="2" style="text-align: right;"><b>Total Transaksi Persediaan</b></td>
                                <td style="text-align: center;"><b>{{ $tot_item }}</b></td>
                                <td style="text-align: right;">
                                    {{-- <b>Rp. {{ number_format($tot_harga,0,'','.') }}</b> --}}
                                    <br>
                                </td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_total_harga,0,'','.') }}</b></td>
                                <td style="text-align: center;"><b>{{ $tot_item_kel }}</b></td>
                                <td><b></b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_harga_kel,0,'','.') }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_total_harga_kel,0,'','.') }}</b></td>
                                <td style="text-align: center;"><b>{{ $tot_item_sis }}</b></td>
                                <td><b></b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_total_harga_sis,0,'','.') }}</b></td>
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
