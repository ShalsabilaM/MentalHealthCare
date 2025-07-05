<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    use HasFactory;

    protected $table = 'artikel';
    protected $primaryKey = 'artikel_id';

    protected $fillable = [
        'judul',
        'isi',
        'tanggal_publish',
        'author_id',
    ];

    /**
     * Relasi: Satu Artikel dimiliki oleh satu User (sebagai author).
     */
    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
