<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SesiKonseling extends Model
{
    use HasFactory;

    /**
     * Nama tabel yang terhubung dengan model ini.
     * (Opsional jika nama tabel adalah 'sesi_konselings')
     */
    protected $table = 'sesi_konseling';

    /**
     * Primary key dari tabel.
     * (Opsional jika primary key adalah 'id')
     */
    protected $primaryKey = 'sesi_id';


    /**
     * Atribut yang dapat diisi secara massal.
     */
    protected $fillable = [
        'user_id',
        'tanggal',
        'jam',
        'metode',
        'status',
    ];

    /**
     * Relasi: Satu Sesi Konseling dimiliki oleh satu User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * Relasi: Satu Sesi Konseling memiliki satu Pembayaran.
     */
    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'sesi_id');
    }

    /**
     * Relasi: Satu Sesi Konseling memiliki satu Feedback.
     */
    public function feedback()
    {
        return $this->hasOne(Feedback::class, 'sesi_id');
    }

    /**
     * Relasi: Satu Sesi Konseling memiliki satu Catatan Konseling.
     */
    public function catatanKonseling()
    {
        return $this->hasOne(CatatanKonseling::class, 'sesi_id');
    }
}
