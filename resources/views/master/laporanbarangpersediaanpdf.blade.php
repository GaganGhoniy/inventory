<table style="margin: 0 auto; width: 700px;">
    <tr>
        <td style="width: auto">
            {{-- <img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt=""> --}}
        </td>
        <td>
            <h1 style="text-align: center; margin-top: 30px">PT. DAKONAN MAS <br> Laporan Persediaan Barang</h1>
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
<table border="1" style="margin: 0 auto; width: 700px;">
    <thead>
    <tr style="text-align: center; background-color: D8D9DA;">
        <th><b>Kode Barang</b></th>
        <th><b>Merk Barang</b></th>
        <th><b>Nama Barang</b></th>
        <th><b>Tempat Penyimpanan</b></th>
        <th><b>Sisa Unit</b></th>
    </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
            <tr>
                <td style="text-align: left; padding: 4px">{{ $item->kode_barang }}</td>
                <td style="text-align: center; padding: 4px">{{ $item->merk->merk }}</td>
                <td style="text-align: left; padding: 4px"><?php echo wordwrap($item->nama_barang, 40, "<br>\n"); ?></td>
                <td style="text-align: center; padding: 4px">{{ $item->tempat_penyimpanan }}</td>
                <td style="text-align: center; padding: 4px">{{ $item->stok }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<table style="margin: 0 auto; width: 700px; font-size: 12px" >
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

