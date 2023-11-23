<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pelanggans', function (Blueprint $table) {
            $table->id();
            $table->date('transaksi_date');
            $table->string('jenis_transaksi');
            $table->string('nama');
            $table->text('alamat', null);
            $table->string('no_hp', null);
            $table->string('ukuran');
            $table->string('lensa');
            $table->string('frame');
            $table->integer('harga');
            $table->text('keterangan', null);

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pelanggan_models');
    }
};
