<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasuksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masuks', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi');
            $table->string('id_supliyer');
            $table->string('stok_awal');
            $table->string('stok_akhir');
            $table->string('total_item');
            $table->string('id_barang');
            $table->string('harga');
            $table->string('total_harga');
            $table->string('pj');
            $table->string('is_edit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masuks');
    }
}
