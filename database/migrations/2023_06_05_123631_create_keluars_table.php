<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKeluarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keluars', function (Blueprint $table) {
            $table->id();
            $table->string('id_transaksi_keluar');
            $table->string('id_masuk');
            $table->string('id_customer');
            $table->string('total_item');
            $table->string('id_barang');
            $table->string('harga');
            $table->string('total_harga');
            $table->string('stok_akhir');
            $table->string('status');
            $table->string('persen');
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
        Schema::dropIfExists('keluars');
    }
}
