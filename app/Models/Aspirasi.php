<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aspirasi extends Model
{
    protected $primaryKey = 'aspirasi_id';
    protected $fillable = [
        'siswa_id',
        'kategori_id',
        'lokasi',
        'foto',
        'keterangan',
        'status',
        'feedback',
    ];

    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswa_id','siswa_id');
    }

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id','kategori_id');
    }
}
