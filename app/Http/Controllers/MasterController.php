<?php

namespace App\Http\Controllers;

use App\Barang;
use App\Kategori;
use App\Keluar;
use App\Masuk;
use App\Merk;
use App\Supliyer;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class MasterController extends Controller
{
    public function kategori()
    {
        $data = Kategori::get();
        return view('master.kategori', compact('data'));
    }

    public function merk()
    {
        $data = Merk::get();
        return view('master.merk', compact('data'));
    }

    public function supliyer()
    {
        $data = Supliyer::get();
        return view('master.supliyer', compact('data'));
    }

    public function barang()
    {
        $data = Barang::with('merk', 'kategori', 'supliyer')->get();
        $kat = Kategori::get();
        $merk = Merk::get();
        $supliyer = Supliyer::get();
        // dd($data);
        return view('master.barang', compact('data', 'kat', 'merk', 'supliyer'));
    }

    public function barangMasuk()
    {
        $data = Masuk::with('barang')->get();
        // dd($data);
        $barang = Barang::with('kategori', 'merk')->get();
        // dd($barang);
        return view('master.barangmasuk', compact('data', 'barang'));
    }

    public function barangKeluar()
    {
        $data = Keluar::with('barang')->get();
        // dd($data);
        $barang = Barang::get();
        return view('master.barangkeluar', compact('data', 'barang'));
    }

    public function laporanBarangMasuk()
    {
        $barang = Barang::with('masuk')->get();
        // dd($barang);
        return view('master.laporanbarangmasuk', compact('barang'));
    }

    public function laporanBarangKeluar()
    {
        $barang = Barang::with('keluar')->get();
        // dd($barang);
        return view('master.laporanbarangkeluar', compact('barang'));
    }

    public function laporanBarangTransaksi()
    {
        $barang = Barang::with('masuk', 'keluar')->get();
        // dd($barang);
        return view('master.laporanbarangtransaksi', compact('barang'));
    }

    public function laporanBarangPersediaan()
    {
        $barang = Barang::with(['masuk', 'keluar' => function ($query) {
            return $query->where('stok_akhir', '!=', 0);
        }])->get();
        // dd($barang);
        return view('master.laporanbarangpersediaan', compact('barang'));
    }

    public function laporanBarangRestok()
    {
        $searchKeyword = '';
        $barang = Barang::with('kategori')->get();
        // dd($barang);
        return view('master.laporanbarangrestok', compact('barang', 'searchKeyword'));
    }

    public function laporanBarangRestokSearch(Request $request)
    {
        $searchKeyword = $request->get('search');

        $barang = Barang::with('kategori')
            ->whereHas('merk', function ($query) use ($searchKeyword) {
                $query->where('merk', $searchKeyword);
            })
            ->get();
        // dd($searchKeyword);
        return view('master.laporanbarangrestok', compact('barang', 'searchKeyword'));
    }

    public function cetaklaporanBarangMasuk()
    {
    }

    public function cetaklaporanBarangKeluar()
    {
    }

    public function cetaklaporanBarangTransaksi()
    {
    }

    public function cetaklaporanbarangpersediaan()
    {
        // $dompdf = new Dompdf();
        $barang = Barang::with(['masuk' => function ($query) {
            return $query->where('stok_akhir', '!=', 0);
        }])->get();
        $date = date("d-m-Y");

        // Convert $barang object to array
        // $barangArray = $barang->toArray();
        // dd($barang);
        $dompdf = PDF::loadView('master.laporanbarangpersediaanpdf', ['barang' => $barang, 'date' => $date]);
        $dompdf->setPaper('A4', 'potrait');
        $dompdf->render();
        return $dompdf->stream('laporanbarangpersediaan.pdf');
        // return $dompdf->stream('laporanbarangpersediaan.pdf');
        // return view('master.pdf', ['barang' => $barang, 'date' => $date]); tampilan buat edit

    }

    public function cetaklaporanBarangRestok(Request $request)
    {
        $searchKeyword = $request->get('search');
        $date = date("d-m-Y");

        // dd($searchKeyword);
        if ($searchKeyword !== null) {
            $barang = Barang::with('kategori')
                ->whereHas('merk', function ($query) use ($searchKeyword) {
                    $query->where('merk', $searchKeyword);
                })
                ->get();
        } else {
            $barang = Barang::with('kategori')->get();
        }
        // Generate the PDF
        // $pdf = new Dompdf();
        return view('master.laporanbarangrestokpdf', ['barang' => $barang, 'date' => $date]);

        // Download the PDF
        // return $pdf->stream('laporan_barang_restok.pdf');
    }
}
