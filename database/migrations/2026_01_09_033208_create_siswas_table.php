<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('siswas', function (Blueprint $table) {
            $table->id('siswa_id');
            $table->foreignId('user_id')->constrained('users','user_id');
            $table->foreignId('kelas_id')->constrained('kelas', 'kelas_id');
            $table->string('nis')->unique();
            $table->string('nama');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
