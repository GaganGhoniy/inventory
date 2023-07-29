@extends('layout.master')
@section('parentPageTitle', 'Laporan Barang Keluar')
@section('title', 'Laporan Barang Keluar')


@section('content')


<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Laporan Barang Keluar</h2>
                <a href="{{route('laporan.cetaklaporanBarangKeluar')}}" type="button" style="float:right; border-radius:5px;" class="btn btn-primary"><i class="fa fa-print"></i></a>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-striped table-hover dataTable js-exportable">
                        <thead>
                            <th colspan="1" style="text-align: center;"><b>Kode Barang</b></th>
                            <th colspan="1" style="text-align: center;"><b>Merk Barang</b></th>
                            <th colspan="1" style="text-align: center;"><b>Nama Barang</b></th>
                            <th colspan="4" style="text-align: center;"><b>Barang keluar</b></th>
                        </thead>
                        <tbody>
                            <?php $tot_item = 0; $tot_harga = 0; $tot_total_harga = 0; ?>
                            @foreach ($barang as $item)
                            <tr style="text-align: center;">
                                <td><b>{{ $item->kode_barang }}</b></td>
                                <td><b>{{ $item->merk->merk }}</b></td>
                                <td><b><?php echo wordwrap($item->nama_barang,40,"<br>\n"); ?></b></td>
                                <td><b>Unit</b></td>
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang')
                                <td><b>Laba</b></td>
                                <td><b>Harga</b></td>
                                <td><b>Total</b></td>
                                @endhasanyrole
                            </tr>
                            <?php  $sum_item = 0; $sum_harga = 0; $sum_total_harga = 0; ?>
                            @foreach ($item->keluar as $keluar)
                            @if($keluar->status == 1)
                            <?php
                                    $sum_item = $sum_item + $keluar->total_item;
                                    $sum_harga = $sum_harga + $keluar->harga;
                                    $sum_total_harga = $sum_total_harga + $keluar->total_harga;
                                ?>
                            <tr>
                                <td colspan="3" style="text-align: center;">{{ $keluar->created_at}}</td>
                                <td style="text-align: center;">{{ $keluar->total_item }}</td>
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang')
                                <td style="text-align: center;">@if ($keluar->persen != null) {{ $keluar->persen }}% @else 0% @endif</td>
                                <td style="text-align: right;">Rp. {{ number_format($keluar->harga,0,'','.') }}</td>
                                <td style="text-align: right;">Rp. {{ number_format($keluar->total_harga,0,'','.') }}
                                </td>
                                @endhasanyrole
                            </tr>
                            @endif
                            @endforeach
                            <tr>
                                <td colspan="3" style="text-align: right;"><b>Jumlah</b></td>
                                <td style="text-align: center;"><b>{{ $sum_item }}</b></td>
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang')
                                <td style="text-align: center;"><b></b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($sum_harga,0,'','.') }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($sum_total_harga,0,'','.') }}</b>
                                </td>
                                @endhasanyrole
                            </tr>
                            <?php
                                $tot_item = $tot_item + $sum_item;
                                $tot_harga = $tot_harga + $sum_harga;
                                $tot_total_harga = $tot_total_harga + $sum_total_harga;
                                ?>
                            @endforeach
                            <tr>
                                <td colspan="3" style="text-align: right;"><b>Total Transaksi Keluar</b></td>
                                <td style="text-align: center;"><b>{{ $tot_item }}</b></td>
                                @hasanyrole('root admin|super admin|Kepala Divisi Gudang')
                                <td style="text-align: center;"><b></b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_harga,0,'','.') }}</b></td>
                                <td style="text-align: right;"><b>Rp. {{ number_format($tot_total_harga,0,'','.') }}</b>
                                </td>
                                @endhasanyrole
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
