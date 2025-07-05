<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;

    protected $table = 'feedback';
    protected $primaryKey = 'feedback_id';

    protected $fillable = [
        'sesi_id',
        'rating',
        'komentar',
    ];

    /**
     * Relasi: Satu Feedback dimiliki oleh satu Sesi Konseling.
     */
    public function sesiKonseling()
    {
        return $this->belongsTo(SesiKonseling::class, 'sesi_id');
    }
}
