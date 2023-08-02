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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('kendaraan_id');
            $table->integer('divisi_id');
            $table->integer('supir_id');
            $table->date('tanggal_ambil');
            $table->date('tanggal_kembali');
            $table->boolean('status')->default(false);
            $table->boolean('konfirmasi1')->default(false);
            $table->boolean('konfirmasi2')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
