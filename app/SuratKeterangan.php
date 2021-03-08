<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratKeterangan extends Model
{
    protected $table = 'surat_keterangan';

    protected $fillable = [
        'urut', 'nomor', 'tujuan', 'deskripsi', 'users_id'
    ];

    protected $hidden = [];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
