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
        $searchKeyword = '';
        $barang = Barang::with(['masuk', 'keluar' => function ($query) {
            return $query->where('stok_akhir', '!=', 0);
        }])->get();
        // dd($barang);
        return view('master.laporanbarangpersediaan', compact('barang', 'searchKeyword'));
    }

    public function laporanBarangPersediaanSelect(Request $request)
    {
        $searchKeyword = $request->get('select');

        if($searchKeyword !== null){
            $barang = Barang::with(['masuk', 'keluar' => function ($query) {
                return $query->where('stok_akhir', '!=', 0);
            }])->where('tempat_penyimpanan', $searchKeyword)->get();
        } else {
            $barang = Barang::with(['masuk', 'keluar' => function ($query) {
                return $query->where('stok_akhir', '!=', 0);
            }])->get();
        }
        // dd($barang);
        return view('master.laporanbarangpersediaan', compact('barang', 'searchKeyword'));
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
        $barang = Barang::with('masuk')->get();
        $date = date("d-m-Y");

        // Download PDF
        // $dompdf = PDF::loadView('master.laporanbarangmasukpdf', ['barang' => $barang, 'date' => $date]);
        // $dompdf->setPaper('A4', 'potrait');
        // $dompdf->render();
        // return $dompdf->stream('laporanbarangmasuk.pdf');

        // Buat View
        return view('master.laporanbarangmasukpdf', ['barang' => $barang, 'date' => $date]);
    }

    public function cetaklaporanBarangKeluar()
    {
        $barang = Barang::with('keluar')->get();
        $date = date("d-m-Y");
        
        // Download PDF
        // $dompdf = PDF::loadView('master.laporanbarangkeluarpdf', ['barang' => $barang, 'date' => $date]);
        // $dompdf->setPaper('A4', 'potrait');
        // $dompdf->render();
        // return $dompdf->stream('laporanbarangkeluar.pdf');

        // Buat View
        return view('master.laporanbarangkeluarpdf', ['barang' => $barang, 'date' => $date]);
    }

    public function cetaklaporanBarangTransaksi()
    {
        $barang = Barang::with('masuk', 'keluar')->get();
        $date = date("d-m-Y");

        // Download PDF
        // $dompdf = PDF::loadView('master.laporanbarangtransaksipdf', ['barang' => $barang, 'date' => $date]);
        // $dompdf->setPaper('A4', 'landscape');
        // $dompdf->render();
        // return $dompdf->stream('laporanbarangtransaksi.pdf');

        // Buat View
        return view('master.laporanbarangtransaksipdf', ['barang' => $barang, 'date' => $date]);
    }

    public function cetaklaporanbarangpersediaan(Request $request)
    {
        $searchKeyword = $request->get('select');
        $date = date("d-m-Y");

        if($searchKeyword !== null){
            $barang = Barang::with(['masuk' => function ($query) {
                return $query->where('stok_akhir', '!=', 0);
            }])->where('tempat_penyimpanan', $searchKeyword)->get();
        } else {
            $barang = Barang::with(['masuk' => function ($query) {
                return $query->where('stok_akhir', '!=', 0);
            }])->get();
        }

        // Convert $barang object to array
        // $barangArray = $barang->toArray();
        // dd($barang);

        // Download PDF
        // $dompdf = PDF::loadView('master.laporanbarangpersediaanpdf', ['barang' => $barang, 'date' => $date]);
        // $dompdf->setPaper('A4', 'potrait');
        // $dompdf->render();
        // return $dompdf->stream('laporanbarangpersediaan.pdf');

        // Buat View
        return view('master.laporanbarangpersediaanpdf', ['barang' => $barang, 'date' => $date]);

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
        
        // Dowonload PDF
        // $dompdf = PDF::loadView('master.laporanbarangrestokpdf', ['barang' => $barang, 'date' => $date]);
        // $dompdf->setPaper('A4', 'potrait');
        // $dompdf->render();
        // return $dompdf->stream('laporanbarangrestok.pdf');

        // Buat View
        return view('master.laporanbarangrestokpdf', ['barang' => $barang, 'date' => $date]);
    }
}
