<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $primaryKey = 'kategori_id';
    protected $fillable = [
        'nama',
        'keterangan',
    ];

    public function aspirasis()
    {
        return $this->hasMany(Aspirasi::class, 'kategori_id', 'kategori_id');
    }
}
