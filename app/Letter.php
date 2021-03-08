<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Letter extends Model
{
    protected $fillable = [
        'nomor', 'kategori', 'tujuan', 'deskripsi', 'users_id'
    ];

    protected $hidden = [
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'users_id');
    }
}
