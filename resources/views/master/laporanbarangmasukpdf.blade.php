<table style="margin: 0 auto; width: 700px;">
    <tr>
        <td style="width: auto">
            {{-- <img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt=""> --}}
        </td>
        <td>
            <h1 style="text-align: center; margin-top: 30px">PT. DAKONAN MAS <br> Laporan Barang Masuk</h1>
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

<table border="1" style="margin: 0 auto; width: 700px; font-size: 12px">
    <thead style="background-color: D8D9DA;">
        <th colspan="1" style="text-align: center;"><b>Kode Barang</b></th>
        <th colspan="1" style="text-align: center;"><b>Merk Barang</b></th>
        <th colspan="1" style="text-align: center;"><b>Nama Barang</b></th>
        <th colspan="4" style="text-align: center;"><b>Barang Masuk</b></th>
    </thead>
    <tbody>
        <?php $tot_item = 0; $tot_harga = 0; $tot_total_harga = 0; ?>
        @foreach ($barang as $item)
        <tr style="text-align: center; background-color: D8D9DA;">
            <td style="text-align: left; padding: 4px; width: 15px;"><b>{{ $item->kode_barang }}</b></td>
            <td style="text-align: left; padding: 4px; width: 40px;"><b>{{ $item->merk->merk }}</b></td>
            <td style="text-align: left; padding: 4px; width: 120px;"><b><?php echo wordwrap($item->nama_barang,40,"<br>\n"); ?></b></td>
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
            <td colspan="3" style="text-align: center;">{{ $masuk->created_at}}</td>
            <td style="text-align: center; padding: 4px;">{{ $masuk->total_item }}</td>
            <td style="text-align: center; padding: 4px;">Rp. {{ number_format($masuk->harga,0,'','.') }}</td>
            <td style="text-align: center; padding: 4px;">Rp. {{ number_format($masuk->total_harga,0,'','.') }}</td>
        </tr>
        @endforeach
        <tr style="background-color: D8D9DA;">
            <td colspan="3" style="text-align: right;"><b>Jumlah</b></td>
            <td style="text-align: center; padding: 4px;"><b>{{ $sum_item }}</b></td>
            <td style="text-align: center; padding: 4px;"></td>
            <td style="text-align: center; padding: 4px;"><b>Rp. {{ number_format($sum_total_harga,0,'','.') }}</b></td>
        </tr>
        <?php 
        $tot_item = $tot_item + $sum_item;
        $tot_harga = $tot_harga + $sum_harga;
        $tot_total_harga = $tot_total_harga + $sum_total_harga;
        ?>
        @endforeach
        <tr>
            <td colspan="3" style="text-align: right;"><b>Total Transaksi Masuk</b></td>
            <td style="text-align: center; padding: 4px;""><b>{{ $tot_item }}</b></td>
            <td style="text-align: center; padding: 4px;"></td>
            <td style="text-align: center; padding: 4px;"><b>Rp. {{ number_format($tot_total_harga,0,'','.') }}</b></td>
        </tr>
    </tbody>
</table>

<table style="margin: 0 auto; width: 700px;" >
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