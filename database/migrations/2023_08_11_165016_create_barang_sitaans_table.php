<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_sitaans', function (Blueprint $table) {
            $table->id();
            $table->string('no_barang')->unique();
            $table->string('nama_barang');
            $table->string('jenis_barang');
            $table->string('deskripsi');
            $table->unsignedBigInteger('id_pelaku');
            $table->foreign('id_pelaku')->references('id')->on('pelakus')->onDelete('cascade');
          
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
        Schema::dropIfExists('barang_sitaans');
    }
};
