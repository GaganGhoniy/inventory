<table border="1" style="margin: 0 auto">
    <thead>
        <tr>
            <th colspan="5">
                <h1 style="text-align: center;">PT. DAKONAN MAS <br> Laporan Barang Butuh Re-Stok</h1>
                <hr>
                <p>Dicetak Pada {{ $date }}</p>
            </th>
        </tr>
    </tr>
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
