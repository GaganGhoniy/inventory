<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $fillable = [
        'id_kategori',
        'id_merk',
        'kode_barang',
        'nama_barang',
        'stok',
        'tempat_penyimpanan',
        'id_supliyer',
        'safety_stock',
    ];

    public function merk()
    {
        return $this->belongsTo(Merk::class, 'id_merk', 'id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id');
    }

    public function supliyer()
    {
        return $this->belongsTo(Supliyer::class, 'id_supliyer', 'id');
    }

    public function masuk()
    {
        return $this->hasMany(Masuk::class, 'id_barang', 'id');
    }

    public function keluar()
    {
        return $this->hasMany(Keluar::class, 'id_barang', 'id');
    }
}
