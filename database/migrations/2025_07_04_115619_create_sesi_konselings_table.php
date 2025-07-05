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
        Schema::create('sesi_konseling', function (Blueprint $table) {
            $table->id('sesi_id');
            
            // Foreign key untuk user yang melakukan konseling
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
            
            $table->date('tanggal');
            $table->time('jam');
            $table->string('metode'); // Contoh: 'Online', 'Offline'
            $table->string('status'); // Contoh: 'Dijadwalkan', 'Selesai', 'Batal'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sesi_konseling');
    }
};
