<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratEksternal extends Model
{
    protected $table = 'surat_eksternal';

    protected $fillable = [
        'urutan', 'nomor', 'tujuan', 'deskripsi', 'users_id'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
