<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $primaryKey = 'kelas_id';
    protected $fillable =[
        'nama',
    ];

    public function siswas()
    {
        return $this->hasMany(Siswa::class, 'kelas_id','kelas_id');
    }
}
