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
        Schema::create('catatan_konseling', function (Blueprint $table) {
            $table->id('catatan_id');
            
            // Foreign key untuk sesi konseling
            $table->unsignedBigInteger('sesi_id');
            $table->foreign('sesi_id')->references('sesi_id')->on('sesi_konseling')->onDelete('cascade');
            
            $table->text('diagnosa');
            $table->text('rekomendasi');
            $table->text('isi_catatan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('catatan_konseling');
    }
};
