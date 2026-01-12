<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{

    use HasFactory;
    protected $primaryKey = 'siswa_id';

    protected $fillable = [
        'kelas_id',
        'user_id',
        'nis',
        'nama',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'kelas_id');
    }

    public function aspirasis()
    {
        return $this->hasMany(Aspirasi::class, 'siswa_id', 'siswa_id');
    }
}