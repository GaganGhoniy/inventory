<table border="1" style="margin: 0 auto">
    <thead>
        {{-- <tr>
            <th colspan="5">
                <img src="{{ asset('assets/images/Logo Dakonan.png') }}" alt="">
            </th>
        </tr> --}}
        <tr>
            <th colspan="5">
                <h1 style="text-align: center;">PT. DAKONAN MAS <br> Laporan Persediaan Barang</h1>
                <hr>
                <p>Dicetak Pada {{ $date }}</p>
            </th>
        </tr>
        <tr>
            
        </tr>
        <tr style="text-align: center;">
            <th><b>Kode Barang</b></th>
            <th><b>Nama Barang</b></th>
            <th><b>Sisa Unit</b></th>
            <th><b>Harga</b></th>
            <th><b>Total Harga</b></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($barang as $item)
            <tr>
                <td style="text-align: left; padding: 4px">{{ $item->kode_barang }}</td>
                <td style="text-align: left; padding: 4px"><?php echo wordwrap($item->nama_barang, 40, "<br>\n"); ?></td>
                <td style="text-align: center; padding: 4px">{{ $item->stok }}</td>
                <td style="text-align: center; padding: 4px">
                    @if (isset($item->masuk) && count($item->masuk) > 0)
                        Rp. {{ number_format($item->masuk[0]->harga) }}
                    @else
                        Rp. 0
                    @endif
                </td>
                <td style="text-align: center; padding: 4px">
                    @if (isset($item->masuk) && count($item->masuk) > 0)
                        Rp. {{ number_format($item->stok * $item->masuk[0]->harga) }}
                    @else
                        Rp. 0
                    @endif
                </td>

                {{-- <td>Rp. {{ number_format( $item->masuk[0]->harga) }}</td> --}}
                {{-- <td>Rp. {{ number_format($item->stok * $item->masuk[0]->harga) }}</td> --}}
            </tr>
        @endforeach
        <tr>
            TTD 
        </tr>
    </tbody>
</table>
