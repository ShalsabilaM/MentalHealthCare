<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * Menentukan primary key tabel, sesuai dengan migrasi Anda.
     */
    protected $primaryKey = 'user_id';

    /**
     * Atribut yang dapat diisi secara massal (mass assignable).
     * Ini penting untuk fungsi registrasi.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
        'tanggal_lahir',
        'jenis_kelamin',
        'no_hp',
    ];

    /**
     * Atribut yang harus disembunyikan saat di-serialisasi (misalnya saat diubah ke JSON).
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Atribut yang harus di-cast ke tipe data tertentu.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed', // Otomatis hash password saat diset
        'tanggal_lahir' => 'date',
    ];

    // --- RELASI KE MODEL LAIN ---

    /**
     * Relasi: Satu User bisa memiliki banyak Sesi Konseling.
     */
    public function sesiKonselings()
    {
        // Foreign key 'user_id' di tabel sesi_konseling, local key 'user_id' di tabel users
        return $this->hasMany(SesiKonseling::class, 'user_id', 'user_id');
    }

    /**
     * Relasi: Satu User (sebagai author) bisa memiliki banyak Artikel.
     */
    public function artikels()
    {
        // Foreign key 'author_id' di tabel artikel, local key 'user_id' di tabel users
        return $this->hasMany(Artikel::class, 'author_id', 'user_id');
    }
}
