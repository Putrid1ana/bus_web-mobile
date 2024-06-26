<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('penumpang_id');
            $table->date('tanggal_pemesanan');
            $table->time('waktu'); 
            $table->unsignedBigInteger('rute_id');
            $table->unsignedBigInteger('armada_id');
            $table->timestamps();

            // Foreign keys
            $table->foreign('penumpang_id')->references('id')->on('penumpang')->onDelete('cascade');
            $table->foreign('armada_id')->references('id')->on('transportasi')->onDelete('cascade');
            $table->foreign('rute_id')->references('id')->on('transportasi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('laporan');
    }
}
