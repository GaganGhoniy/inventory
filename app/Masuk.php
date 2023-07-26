<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masuk extends Model
{
    protected $fillable = [
        'id_transaksi',
        'id_supliyer',
        'stok_awal',
        'stok_akhir',
        'total_item',
        'id_barang',
        'harga',
        'total_harga',
        'pj',
        'is_edit',
    ];

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'id_barang', 'id');
    }

    public function keluar()
    {
        return $this->hasMany(Keluar::class, 'id_masuk', 'id');
    }
}
