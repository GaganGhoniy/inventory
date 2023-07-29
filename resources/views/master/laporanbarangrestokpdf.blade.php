<table style="margin: 0 auto; width: 700px;">
    <tr>
        <td style="width: auto">
            {{-- <img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt=""> --}}
        </td>
        <td>
            <h1 style="text-align: center; margin-top: 30px">PT. DAKONAN MAS <br> Laporan Barang Butuh Re-Stok</h1>
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
    <thead>
    <tr style="text-align: center; background-color: D8D9DA;">
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
                <td style="text-align: left; padding: 4px; width: 15px;">{{ $item->kode_barang }}</td>
                <td style="text-align: left; padding: 4px; width: 40px;"><b>{{ $item->merk->merk }}</b></td>
                <td style="text-align: left; padding: 4px; width: 120px;"><?php echo wordwrap($item->nama_barang, 35, "<br>\n"); ?></td>
                <td style="text-align: left; padding: 4px"><?php echo wordwrap($item->supliyer->nama, 35, "<br>\n"); ?></td>
                <td style="text-align: center; padding: 4px">{{ $item->stok }}</td>
                <td style="text-align: center; padding: 4px">{{ $item->safety_stock }}</td>
                <td style="text-align: center; padding: 4px">{{ $item->kategori->lama_restok }} Hari</td>
            </tr>
        @endif
        @endforeach
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
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody>
        <tr>
            <th colspan="7">
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