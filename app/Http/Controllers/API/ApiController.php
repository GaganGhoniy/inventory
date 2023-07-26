<?php

namespace App\Http\Controllers\API;

use App\Auth\Role;
use App\Barang;
use App\Http\Controllers\Controller;
use App\Kategori;
use App\Keluar;
use App\Masuk;
use App\Merk;
use App\ModelHasRole;
use App\Supliyer;
use App\User;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ApiController extends Controller
{
    public function store(Request $request)
    {
		if($request->get('jenis')=="supliyer"){
            $barang = Barang::where('id', $request->get('id'))
            ->first();
            $supliyer = Supliyer::where('id', $barang->id_supliyer)->pluck('id','nama');
            $kat = Kategori::where('id', $barang->id_kategori)->pluck('id','lama_restok');
            $stok = $barang->stok;
		    return response()->json(compact('supliyer','kat','stok'));
        }
		
    }

    public function simpanPlotUser(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            'id' => 'required',
            'role' => 'required',
        ]);
        try {
            $user = User::find($request->id);
            $user->syncRoles($request->role);
        } catch (\Throwable $th) {
            return redirect()->back();
        }
        return redirect()->back();
    }

    public function simpanPeran(Request $request)
    {
        try {
            $role = Role::updateOrCreate(
                ['id' => $request->id],
                ['name' => $request->nama, 'guard_name' => 'web']
            );

            return response(['success' => true, 'peran' => $role]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Peran'], 500);
        }
    }

    public function simpanUser(Request $request)
    {
        try {
            $user = User::updateOrCreate(
                ['id' => $request->id],
                ['name' => $request->nama, 'email' => $request->email, 'password' => Hash::make($request->password)]
            );

            return response(['success' => true, 'user' => $user]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data User'], 500);
        }
    }


    public function hapusUser(Request $request)
    {
        try {
            $user = User::where('id', $request->id)->firstOrFail();
            $model = ModelHasRole::where('model_id', $request->id)->first();
            if ($model) {
                $model->delete();
            }
            $user->delete();

            return response(['success' => true, 'user' => $user]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data User'], 500);
        }
    }

    public function simpanKategori(Request $request)
    {
        try {
            $kategori = Kategori::updateOrCreate(
                ['id' => $request->id],
                ['kategori' => $request->kategori, 'lama_restok' => $request->restok]
            );

            return response(['success' => true, 'kategori' => $kategori]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Kategori'], 500);
        }
    }

    public function hapusKategori(Request $request)
    {
        try {
            $kategori = Kategori::find($request->id);
            $kategori->delete();

            return response(['success' => true, 'kategori' => $kategori]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Kategori'], 500);
        }
    }

    public function simpanMerk(Request $request)
    {
        try {
            $cek = Merk::where('merk', $request->merk)->count();
            if ($request->id == null) {
                if ($cek > 0) {
                    return response(['success' => false, 'msg' => 'Nama Merk Barang Sudah Terdaftar'], 500);
                }
            }
            $merk = Merk::updateOrCreate(
                ['id' => $request->id],
                ['merk' => $request->merk]
            );

            return response(['success' => true, 'merk' => $merk]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Merk'], 500);
        }
    }

    public function hapusMerk(Request $request)
    {
        try {
            $merk = Merk::find($request->id);
            $merk->delete();

            return response(['success' => true, 'merk' => $merk]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Merk'], 500);
        }
    }

    public function simpanSupliyer(Request $request)
    {
        try {
            $cek = Supliyer::where('nama', $request->nama)->count();
            if ($request->id == null) {
                if ($cek > 0) {
                    return response(['success' => false, 'msg' => 'Nama Supliyer Sudah Terdaftar'], 500);
                }
            }
            $supliyer = Supliyer::updateOrCreate(
                ['id' => $request->id],
                ['nama' => $request->nama, 'alamat' => $request->alamat, 'telp' => $request->telp]
            );

            return response(['success' => true, 'merk' => $supliyer]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Supliyer'], 500);
        }
    }

    public function hapusSupliyer(Request $request)
    {
        try {
            $supliyer = Supliyer::find($request->id);
            $supliyer->delete();

            return response(['success' => true, 'supliyer' => $supliyer]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Supliyer'], 500);
        }
    }

    public function simpanBarang(Request $request)
    {
        try {
            $tot = Barang::count();
            $kode = "BR0" . ($tot + 1);
            $tot1 = Barang::where('id',$request->id)->first();
            if ($tot1) {
                $stok = $tot1->stok;
            }else{
                $stok = 0;
            }
            $barang = Barang::updateOrCreate(
                ['id' => $request->id],
                [
                    'nama_barang' => $request->nama,
                    'id_kategori' => $request->kat,
                    'kode_barang' => $kode,
                    'id_merk' => $request->merk,
                    'tempat_penyimpanan' => $request->tempat,
                    'id_supliyer' => $request->supliyer,
                    'safety_stock' => $request->safety,
                    'stok' => $stok
                ]
            );

            return response(['success' => true, 'barang' => $barang]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Barang'], 500);
        }
    }

    public function hapusBarang(Request $request)
    {
        try {
            $barang = Barang::where('id', $request->id)->firstOrFail();
            $barang->delete();

            return response(['success' => true, 'barang' => $barang]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menghapus Data Barang'], 500);
        }
    }

    public function simpanBarangMasuk(Request $request)
    {
        try {

            $barang = Barang::where('id', $request->barang)->first();
            if ($request->id == null || $request->id == "") {
                $tot = Masuk::count();
                $id_tr = "TR0000" . ($tot + 1);
                $total = $request->stok * $request->harga;
            } else {
                $tot = Masuk::where('id', $request->id)->first();
                $id_tr = $tot->id_transaksi;
                if ($request->stok > $tot->total_item) {
                    $up_stok = $request->stok - $tot->total_item;
                    $total_stok = $barang->stok + $up_stok;
                } elseif ($request->stok < $tot->total_item) {
                    $up_stok = $tot->total_item - $request->stok;
                    $total_stok = $barang->stok - $up_stok;
                }

                $total = $request->stok * $request->harga;
                $coba = Masuk::where('id', '>', $request->id)->where('id_barang', $request->barang)->get();
                if ($coba->count() > 0) {
                    foreach ($coba as $key => $value) {
                        if ($request->stok > $tot->total_item) {
                            $total_stok_awal = $value->stok_awal + $up_stok;
                        } elseif ($request->stok < $tot->total_item) {
                            $total_stok_awal = $value->stok_awal - $up_stok;
                        }

                        $up_awal = Masuk::where('id', $value->id)->first();
                        $up_awal->stok_awal = $total_stok_awal;
                        $up_awal->save();
                    }
                }


                $tot->id_supliyer = $request->supliyer;
                $tot->total_item = $request->stok;
                $tot->id_barang = $request->barang;
                $tot->harga = $request->harga;
                $tot->total_harga = $total;


                $barang->stok = $total_stok;
                $barang->save();

                $tot->save();

                return response(['success' => true, 'data' => $request->all(), 'idtr' => $id_tr, 'coba' => $coba]);
            }
            $up_masuk = Masuk::where('id_barang', $request->barang)->orderBy('id', 'desc')->first();
            if (!empty($up_masuk)) {
                $up_masuk->is_edit = 0;
                $up_masuk->save();
                $total_stokakhir = $up_masuk->stok_akhir + $request->stok;
            } else {
                $total_stokakhir = $request->stok;
            }
            $masuk = Masuk::create([
                'id_transaksi' => $id_tr,
                'id_supliyer' => $request->supliyer,
                'stok_awal' => $barang->stok,
                'stok_akhir' => $request->stok,
                'total_item' => $request->stok,
                'id_barang' => $request->barang,
                'total_harga' => $total,
                'harga' => $request->harga,
                'pj' => Auth::user()->name,
                'is_edit' => 1
            ]);
            $barang->stok = ($barang->stok + $request->stok);
            $barang->save();

            return response(['success' => true, 'masuk' => $masuk]);
        } catch (ModelNotFoundException $th) {
            return response(['success' => false, 'msg' => $th], 500);
        }
    }

    public function getStok(Request $request)
    {
        try {
            $stok = Barang::where('id', $request->get('idbarang'))
                ->pluck('stok');
            return response()->json(compact('stok'));
        } catch (\Throwable $th) {
            return response(['error' => $th]);
        }
    }

    public function simpanBarangKeluar(Request $request)
    {
        try {
            $kel_barang = Barang::where('id', $request->idbarang)->first();
            $dat_kel = Keluar::where('id', $request->id)->first();
            $dat_mas = Masuk::where('id_barang', $request->idbarang)->where('stok_akhir', '!=', 0)->with('keluar')->get();

            if ($request->id == null || $request->id == "") {
                $result = $this->createStock($dat_mas, $request->keluar, $request->idbarang);

                // return response(['success' => true, 'result' => $result, 'request' => $request->all()]);
                // $result = $this->createStock($dat_mas, 5, 1);
            } else {
                $find_mas = Masuk::where('id', $dat_kel->id_masuk)->with('barang')->first();

                if ($find_mas->total_item >= $request->keluar) {
                    if ($request->keluar > $dat_kel->total_item) {
                        $up_stok = $request->keluar - $dat_kel->total_item;
                        $total_stok = $kel_barang->stok - $up_stok;
                    } elseif ($request->keluar < $dat_kel->total_item) {
                        $up_stok = $dat_kel->total_item - $request->keluar;
                        $total_stok = $kel_barang->stok + $up_stok;
                    }
                    $total = ((($request->laba / 100) * $dat_kel->harga) + $dat_kel->harga) * $request->keluar;
                    if ($dat_kel->stok_akhir - $up_stok < 0) {
                        $stokakhir = 0;
                    } else {
                        $stokakhir = $dat_kel->stok_akhir - $up_stok;
                    }
                    $pre = "0";
                    $sisa = "1";
                    $result = "1";
                    $dat_kel->total_item = $request->keluar;
                    $dat_kel->total_harga = $total;
                    $find_mas->stok_akhir = $stokakhir;
                    $dat_kel->persen = $request->laba;

                    $kel_barang->stok = $total_stok;
                } else {
                    if ($request->keluar > $dat_kel->total_item) {
                        $up_stok = $find_mas->total_item - $dat_kel->total_item;
                        $total_stok = $kel_barang->stok - $up_stok;
                    } elseif ($request->keluar < $dat_kel->total_item) {
                        $up_stok = $dat_kel->total_item - $find_mas->total_item;
                        $total_stok = $kel_barang->stok + $up_stok;
                    }
                    $total = ((($request->laba / 100) * $dat_kel->harga) * $find_mas->total_item) + ($dat_kel->harga * $find_mas->total_item);
                    if ($dat_kel->stok_akhir - $up_stok < 0) {
                        $stokakhir = 0;
                    } else {
                        $stokakhir = $dat_kel->stok_akhir - $up_stok;
                    }

                    $pre = "1";
                    $sisa = "1";
                    $result = "1";
                    $dat_kel->total_item = $find_mas->total_item;
                    $dat_kel->total_harga = $total;
                    $dat_kel->persen = $request->laba;

                    $find_mas->stok_akhir = $stokakhir;

                    $kel_barang->stok = $total_stok;
                }
                $dat_kel->save();
                $find_mas->save();
                $kel_barang->save();

                if ($find_mas->total_item < $request->keluar) {

                    $dat_mas1 = Masuk::where('id_barang', $request->idbarang)->where('stok_akhir', '!=', 0)->with('keluar')->get();
                    $pre = "2";
                    $sisa = $request->keluar - $find_mas->total_item;
                    $result = $this->createStock($dat_mas1, $sisa, $request->idbarang);
                } else {
                    return response(['success' => true]);
                }

                return response(['success' => true, 'pre' => $pre, 'sisa' => $sisa, 'result' => $result]);
            }
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Kelola Data', 'debug' => $th], 500);
        }
        try {
            $up_keluar = Keluar::where('id_barang', $request->idbarang)->orderBy('id', 'desc')->first();
            if (!empty($up_keluar)) {
                $up_keluar->is_edit = 0;
                $up_keluar->save();
            }

            foreach ($result['output'] as $key2 => $hasil) {
                $harga = Masuk::where('id', $hasil['id'])->first();
                $total_harga = ((($request->laba / 100) * $harga->harga) * $hasil['permintaan']) + ($harga->harga * $hasil['permintaan']);
                $tot = Keluar::count();
                $id_tr = "KLR0000" . ($tot + 1);
                $dat_kel = Keluar::create([
                    'id_transaksi_keluar' => $id_tr,
                    'id_masuk' => $hasil['id'],
                    'id_customer' => $request->customer,
                    'total_item' => $hasil['permintaan'],
                    'id_barang' => $request->idbarang,
                    'harga' => $harga->harga,
                    'persen' => $request->laba,
                    'total_harga' => $total_harga,
                    'stok_akhir' => $hasil['sisa_stok'],
                    'status' => 0,
                    'pj' => Auth::user()->email,
                    'is_edit' => 1,
                ]);
                $harga->stok_akhir = $hasil['sisa_stok'];
                $harga->save();
                $kel_barang->stok = $kel_barang->stok - $hasil['permintaan'];
                $kel_barang->save();
            }

            return response(['success' => true, 'result' => $result]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Transaksi Masuk', 'debug' => $th], 500);
        }
    }

    public function simpanStatusBarangKeluar(Request $request)
    {
        try {

            $dat_kel = Keluar::where('id', $request->id)->firstOrFail();
            $dat_kel->status = $request->status;
            $dat_kel->save();
            // dd($result,$tess);

            return response(['success' => true, 'result' => $dat_kel]);
            // return response(['success' => true, 'result' => $result, 'hasilnya'=>$tess]);
        } catch (\Throwable $th) {
            return response(['success' => false, 'msg' => 'Gagal Menyimpan Data Transaksi Masuk'], 500);
        }
    }

    public function createStock($data, $permintaan, $id_barang)
    {
        $cek = Barang::where('id', $id_barang)->first('stok');
        $cek_kel = Keluar::where('id_barang', $id_barang)->get();
        // dd($cek_kel,$cek, $data);

        if (intval($cek->stok) > 0 && intval($cek->stok) >= $permintaan) {
            $output = [];
            $stokakhir = 0;
            foreach ($data as $key => $value) {
                $stokSkrg = $value->stok_akhir;
                if ($stokSkrg <= $permintaan) {
                    if ($value->keluar != null) {
                        $total_kel = 0;
                        $stokakhir = $stokSkrg - $permintaan;
                        $permintaan = $permintaan - $value->stok_akhir;
                        foreach ($value->keluar as $key1 => $value1) {
                            $total_kel = $total_kel + $value1->total_item;
                        }
                        if ($stokakhir < 0) {
                            array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => 0, 'tes' => 1, 'permintaan' => $value->stok_akhir]);
                        } else {
                            array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 1, 'permintaan' => $value->stok_akhir]);
                        }
                    }
                } else {
                    $stokakhir = $value->stok_akhir - $permintaan;
                    array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 3, 'permintaan' => $permintaan]);
                    // dd($output);
                    if ($stokakhir >= 0) {
                        return ['output' => $output];
                    }
                }
            }
            dd($output);
            if ($output) {
                return ['output' => $output];
            } else {
                return response(['error' => true, 'message' => 'Permintaan Harus di isi']);
            }
        } else {
            return response(['error' => true, 'message' => 'Stok Kurang Dari Permintaan']);
        }

        // if (intval($cek->stok) > 0 && intval($cek->stok) >= $permintaan) {
        //     $output = [];
        //     $stokakhir = 0;
        //     foreach ($data as $key => $value) {
        //         $total_kel = 0;
        //         foreach ($cek_kel as $key1 => $val_kel) {
        //             if ($val_kel->id_masuk == $value->id) {
        //                 $total_kel = $total_kel + $val_kel->total_item;
        //             } else {
        //                 $total_kel = 0;
        //                 // return;
        //             }
        //         }

        //         // dd($total_kel,$value->total_item);
        //         // if ($total_kel > 0 || $total_kel < 0) {
        //             if ($value->barang->stok >= $permintaan && $permintaan > 0) {
        //                 if (intval($value->total_item) - $total_kel > 0) {
        //                     $stokSkrg = intval($value->total_item) - $total_kel;
        //                     $akumulasi = $stokSkrg - intval($permintaan);
        //                     dd($akumulasi,$stokSkrg);

        //                     if ($akumulasi < 0) {
        //                         $stokakhir = $stokSkrg - $stokSkrg;
        //                         array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 1]);
        //                     } elseif ($akumulasi > 0) {
        //                         $stokakhir = $stokSkrg - $permintaan;
        //                         array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 2]);
        //                     } else {
        //                         $stokakhir = $stokSkrg - $permintaan;
        //                         array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 3]);
        //                     }
        //                     $permintaan = $permintaan - $stokSkrg;
        //                 } else if (intval($value->total_item) - $total_kel < 0) {
        //                     $stokSkrg = intval($value->total_item);
        //                     $akumulasi = $stokSkrg - intval($permintaan);
        //                     // dd($akumulasi,$stokSkrg);
        //                     if ($akumulasi < 0) {
        //                         $stokakhir = $stokSkrg - $stokSkrg;
        //                         array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 4]);
        //                     } elseif ($akumulasi > 0) {
        //                         $stokakhir = $stokSkrg - $permintaan;
        //                         array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 5]);
        //                     } else {
        //                         $stokakhir = $stokSkrg - $permintaan;
        //                         array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 6]);
        //                     }
        //                     $permintaan = $permintaan - $stokSkrg;
        //                 } else {
        //                     $cek_stok = intval($value->total_item) - $total_kel;
        //                     // $akumulasi1 = $stokSkrg - intval($permintaan) - $total_kel;
        //                     if ($cek_stok > 0) {
        //                         $stokSkrg = intval($value->total_item);
        //                         $akumulasi = $stokSkrg - intval($permintaan);
        //                         if ($akumulasi < 0) {
        //                             $stokakhir = $stokSkrg - $stokSkrg;
        //                             array_push($output, ['keluar' => $stokSkrg, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 7]);
        //                         } elseif ($akumulasi > 0) {
        //                             $stokakhir = $stokSkrg - $permintaan;
        //                             array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 8]);
        //                         } else {
        //                             $stokakhir = $stokSkrg - $permintaan;
        //                             array_push($output, ['keluar' => $permintaan, 'id' => $value->id, 'sisa_stok' => $stokakhir, 'tes' => 9]);
        //                         }
        //                         $permintaan = $permintaan - $stokSkrg;
        //                     } else {
        //                         $permintaan = $permintaan;
        //                     }
        //                 }
        //             } else {
        //                 $stokSkrg = intval($value->total_item);
        //                 $stokakhir = $stokakhir + $stokSkrg;
        //             }
        //         // }

        //     }

        //     dd($stokakhir);
        //     // dd($total_kel);
        //     dd($output, $stokakhir);
        //     if ($output) {
        //         return ['output' => $output, 'stok_akhir' => $stokakhir];
        //         // return response(['output' => $output, 'stok_akhir' => $stokakhir]);
        //     } else {
        //         return response(['error' => true, 'message' => 'Permintaan Harus di isi']);
        //     }
        // } else {
        //     return response(['error' => true, 'message' => 'Stok Kurang Dari Permintaan']);
        // }
    }

    public function updateStock()
    {
    }

    public function setFilter(Request $request)
    {
        try {
            $string = $request->bulan;
            $PecahStr = explode("-", $string);
            session(['tahun' => $PecahStr[0], 'bulan' => $PecahStr[1]]);

            return response(['error' => false, 'data' => $PecahStr]);
        } catch (\Throwable $th) {
            return response(['message' => 'Gagal set filter', 'system' => $th], 500);
        }
    }
}
