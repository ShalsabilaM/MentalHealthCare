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
        Schema::create('feedback', function (Blueprint $table) {
            $table->id('feedback_id');
            
            // Foreign key untuk sesi konseling yang diberi feedback
            $table->unsignedBigInteger('sesi_id');
            $table->foreign('sesi_id')->references('sesi_id')->on('sesi_konseling')->onDelete('cascade');
            
            $table->tinyInteger('rating')->unsigned(); // Rating dari 1-5
            $table->text('komentar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
