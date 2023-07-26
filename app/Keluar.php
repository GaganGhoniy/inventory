<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
    protected $fillable = [
        'id_transaksi_keluar',
        'id_masuk',
        'id_customer',
        'total_item',
        'id_barang',
        'harga',
        'total_harga',
        'stok_akhir',
        'pj',
        'status',
        'is_edit',
        'persen',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }
}
