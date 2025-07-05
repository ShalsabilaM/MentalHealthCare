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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id('pembayaran_id');
            
            // Foreign key untuk sesi konseling yang dibayar
            $table->unsignedBigInteger('sesi_id');
            $table->foreign('sesi_id')->references('sesi_id')->on('sesi_konseling')->onDelete('cascade');
            
            $table->string('metode_pembayaran');
            $table->decimal('jumlah', 10, 2); // 10 digit total, 2 digit di belakang koma
            $table->string('status_pembayaran'); // Contoh: 'Lunas', 'Belum Lunas'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
