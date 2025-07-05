<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CatatanKonseling extends Model
{
    use HasFactory;

    protected $table = 'catatan_konseling';
    protected $primaryKey = 'catatan_id';

    protected $fillable = [
        'sesi_id',
        'diagnosa',
        'rekomendasi',
        'isi_catatan',
    ];

    /**
     * Relasi: Satu Catatan Konseling dimiliki oleh satu Sesi Konseling.
     */
    public function sesiKonseling()
    {
        return $this->belongsTo(SesiKonseling::class, 'sesi_id');
    }
}
