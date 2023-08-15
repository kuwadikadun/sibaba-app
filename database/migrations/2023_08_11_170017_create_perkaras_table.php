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
        Schema::create('perkaras', function (Blueprint $table) {
            $table->id();
            $table->string('no_perkara')->unique();
            $table->unsignedBigInteger('id_barang');
            $table->foreign('id_barang')->references('id')->on('barang_sitaans')->onDelete('cascade');
            $table->unsignedBigInteger('id_penyimpanan');
            $table->foreign('id_penyimpanan')->references('id')->on('penyimpanans')->onDelete('cascade');
            $table->date('tanggal_perkara');
            $table->string('status');
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
        Schema::dropIfExists('perkaras');
    }
};
