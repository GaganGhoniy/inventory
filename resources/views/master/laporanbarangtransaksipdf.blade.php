<table style="margin: 0 auto; width: 1000px;">
    <tr>
        <td style="width: auto">
            {{-- <img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt=""> --}}
        </td>
        <td>
            <h1 style="text-align: center; margin-top: 30px">PT. DAKONAN MAS <br> Laporan Transaksi Barang</h1>
        </td>
        <td style="width: auto">
            
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <hr>
            <p style="text-align: center;">Ruko Green Mansion, Jl. Ambeng-Ambeng Selatan, Ngingas, Kec. Waru, Kabupaten Sidoarjo, Jawa Timur</p>
            <p style="text-align: center;">Dicetak Pada {{ $date }}</p>
        </td>
    </tr>
</table>
<table border="1" style="margin: 0 auto; width: 1000px; font-size: 12px">
    <thead style="background-color: D8D9DA;">
        <th colspan="1" style="text-align: center;"><b>Kode Barang</b></th>
        <th colspan="1" style="text-align: center;"><b>Merk Barang</b></th>
        <th colspan="1" style="text-align: center;"><b>Nama Barang</b></th>
        <th colspan="3" style="text-align: center;"><b>Barang Masuk</b></th>
        <th colspan="4" style="text-align: center;"><b>Barang Keluar</b></th>
        <th colspan="3" style="text-align: center;"><b>Persediaan Barang</b></th>
    </thead>
    <tbody>
        <?php $tot_item = 0; $tot_harga = 0; $tot_total_harga = 0; $tot_item_kel = 0; $tot_harga_kel = 0; $tot_total_harga_kel = 0; $tot_item_sis = 0;  $tot_total_harga_sis = 0;?>
        @foreach ($barang as $item)
            <tr style="text-align: center;background-color: D8D9DA;">
                <td style="text-align: left; padding: 4px; width: 15px;"><b>{{ $item->kode_barang }}</b></td>
                <td style="text-align: left; padding: 4px; width: 40px;"><b>{{ $item->merk->merk }}</b></td>
                <td style="text-align: left; padding: 4px; width: 120px;"><b><?php echo wordwrap($item->nama_barang,30,"<br>\n"); ?></b></td>
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
                <td colspan="3" style="text-align: center; padding: 4px">{{ $masuk->created_at}}</td>
                <td style="text-align: center; padding: 4px">@if($masuk){{ $masuk->total_item }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($masuk)Rp. {{ number_format($masuk->harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($masuk)Rp. {{ number_format($masuk->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">0</td>
                <td style="text-align: center; padding: 4px">0%</td>
                <td style="text-align: center; padding: 4px">Rp. 0</td>
                <td style="text-align: center; padding: 4px">Rp. 0</td>
                <td style="text-align: center; padding: 4px">@if($masuk){{ $masuk->total_item }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($masuk)Rp. {{ number_format($masuk->harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($masuk)Rp. {{ number_format($masuk->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
            </tr>
            @endforeach
            @foreach ($item->keluar as $keluar)
            <?php
                $sum_item_kel = $sum_item_kel + $keluar->total_item;
                $sum_harga_kel = $sum_harga_kel + $keluar->harga;
                $sum_total_harga_kel = $sum_total_harga_kel + $keluar->total_harga;
            ?>
            <tr>
                <td colspan="3" style="text-align: center; padding: 4px">{{ $keluar->created_at}}</td>
                <td style="text-align: center; padding: 4px">0</td>
                <td style="text-align: center; padding: 4px">Rp. 0</td>
                <td style="text-align: center; padding: 4px">Rp. 0</td>
                <td style="text-align: center; padding: 4px">@if($keluar){{ $keluar->total_item }} @else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar->persen != null){{ $keluar->persen }}% @else 0% @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar)Rp. {{ number_format($keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar)Rp. {{ number_format($keluar->total_harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar){{ $keluar->stok_akhir }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar)Rp. {{ number_format($keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
                <td style="text-align: center; padding: 4px">@if($keluar)Rp. {{ number_format($keluar->stok_akhir * $keluar->harga,0,'','.') }}@else Rp. 0 @endif</td>
            </tr>
            @endforeach
            <?php
                // $sum_total_harga_sis = $sum_total_harga_kel - $sum_total_harga;
                // $sum_total_harga_sis = $sum_total_harga * $sum_item_sis;
            ?>
            <tr style="background-color: D8D9DA;">
                <td colspan="3" style="text-align: right; padding: 4px"><b>Jumlah</b></td>
                <td style="text-align: center; padding: 4px"><b>{{ $sum_item }}</b></td>
                <td style="text-align: center; padding: 4px">
                    {{-- <b>Rp. {{ number_format($sum_harga,0,'','.') }}</b> --}}
                </td>
                <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($sum_total_harga,0,'','.') }}</b></td>
                <td style="text-align: center; padding: 4px"><b>{{ $sum_item_kel }}</b></td>
                <td><b></b></td>
                <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($sum_harga_kel,0,'','.') }}</b></td>
                <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($sum_total_harga_kel,0,'','.') }}</b></td>
                <td style="text-align: center; padding: 4px"><b>{{ $sum_item_sis = $sum_item-$sum_item_kel }}</b></td>
                <td><b></b></td>
                <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($sum_total_harga_sis,0,'','.') }}</b></td>
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
            <td colspan="3" style="text-align: right; padding: 4px"><b>Total Transaksi Persediaan</b></td>
            <td style="text-align: center; padding: 4px"><b>{{ $tot_item }}</b></td>
            <td style="text-align: center; padding: 4px">
                {{-- <b>Rp. {{ number_format($tot_harga,0,'','.') }}</b> --}}
                <br>
            </td>
            <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($tot_total_harga,0,'','.') }}</b></td>
            <td style="text-align: center; padding: 4px"><b>{{ $tot_item_kel }}</b></td>
            <td><b></b></td>
            <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($tot_harga_kel,0,'','.') }}</b></td>
            <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($tot_total_harga_kel,0,'','.') }}</b></td>
            <td style="text-align: center; padding: 4px"><b>{{ $tot_item_sis }}</b></td>
            <td><b></b></td>
            <td style="text-align: center; padding: 4px"><b>Rp. {{ number_format($tot_total_harga_sis,0,'','.') }}</b></td>
        </tr>
    </tbody>
</table>

<table style="margin: 0 auto; width: 1000px;" >
    <thead>
    <tr style="text-align: center;">
        <th></th>
        <th></th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="5">
                <p style="text-align: right;">Yang Bertanda Tangan</p>
                <br>
                <br>
                <br>
                <br>
                <p style="text-align: right;">....................</p>
            </th>
        </tr>
    </tbody>
</table>
