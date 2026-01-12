<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('aspirasis', function (Blueprint $table) {
            $table->id('aspirasi_id');
            $table->foreignId('siswa_id')->constrained('siswas','siswa_id');
            $table->foreignId('kategori_id')->constrained('kategoris','kategori_id');
            $table->string('lokasi');
            $table->string('foto')->nullable();
            $table->string('keterangan');
            $table->enum('status',['menunggu','diproses','selesai']);
            $table->string('feedback')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('aspirasis');
    }
};
