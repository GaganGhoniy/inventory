<?php

namespace App\Http\Controllers;

use App\Keluar;
use App\Masuk;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    function index() {
        $queryMasuk = Masuk::query();
        $queryKeluar = Keluar::query();
        if (session('tahun') != null) {
            $filterMasukThn = $queryMasuk->whereYear('created_at', session('tahun'));
            $filterKeluarThn = $queryKeluar->whereYear('created_at', session('tahun'));
        }else {
            $filterMasukThn = $queryMasuk;
            $filterKeluarThn = $queryKeluar;
        }
        if(session('bulan') != null){
            $filterMasukBln = $filterMasukThn->whereMonth('created_at', session('bulan'));
            $filterKeluarBln = $filterKeluarThn->whereMonth('created_at', session('bulan'));
        }else{
            $filterMasukBln = $filterMasukThn;
            $filterKeluarBln = $filterKeluarThn;
        }

        $masuk = $filterMasukBln->get();
        $keluar = $filterKeluarBln->get();

        $qtymasuk = 0;
        $hargamasuk = 0;
        $hargasisamasuk = 0;
        foreach ($masuk as $key => $value_masuk) {
            $qtymasuk = $qtymasuk + $value_masuk->total_item;
            $hargamasuk = $hargamasuk + $value_masuk->total_harga;
            $hargasisamasuk = $hargasisamasuk + ($value_masuk->stok_akhir * $value_masuk->harga);
        }

        $qtykeluar = 0;
        $hargakeluar = 0;
        foreach ($keluar as $key => $value_keluar) {
            $qtykeluar = $qtykeluar + $value_keluar->total_item;
            $hargakeluar = $hargakeluar + $value_keluar->total_harga;
        }

        $qtypersediaan = $qtymasuk - $qtykeluar;
        // $hargapersediaan = $hargamasuk - $hargakeluar;
        $hargapersediaan = $hargasisamasuk;

        // dd($qtymasuk, $hargamasuk,$qtykeluar, $hargakeluar);
        return view('dashboard.index', compact('qtymasuk','hargamasuk', 'qtykeluar', 'hargakeluar','qtypersediaan', 'hargapersediaan'));
    }
    function cryptocurrency()               {return view('dashboard.cryptocurrency');}
    function campaign()                     {return view('dashboard.campaign');}
    function ecommerce()                    {return view('dashboard.ecommerce');}
}
