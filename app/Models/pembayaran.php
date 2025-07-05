<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    protected $table = 'pembayaran';
    protected $primaryKey = 'pembayaran_id';

    protected $fillable = [
        'sesi_id',
        'metode_pembayaran',
        'jumlah',
        'status_pembayaran',
    ];

    /**
     * Relasi: Satu Pembayaran dimiliki oleh satu Sesi Konseling.
     */
    public function sesiKonseling()
    {
        return $this->belongsTo(SesiKonseling::class, 'sesi_id');
    }
}
