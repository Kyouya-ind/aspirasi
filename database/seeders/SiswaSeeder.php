<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Siswa;
use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SiswaSeeder extends Seeder
{

    public function run(): void
    {
        $kelas = Kelas::create([
            'nama' => 'XII RPL 1',
        ]);

        $user = User::create([
            'username' => '1234',
            'email' => 'febri@gmail.com',
            'password' => Hash::make('1234'),
            'role' => 'siswa',
        ]);

        $siswa = Siswa::create([
            'user_id' => $user->user_id,
            'kelas_id' => $kelas->kelas_id,
            'nis' => '123',
            'nama' => 'febriansyah',
        ]);
    }
}
