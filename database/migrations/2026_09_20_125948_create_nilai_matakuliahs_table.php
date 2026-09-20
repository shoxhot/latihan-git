<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void{
        Schema::create('nilai_matakuliahs', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa_id', 10);
            $table->string('matakuliah_id', 10);
            $table->integer('nilai');
            $table->timestamps();

            $table->foreign('mahasiswa_id')->references('nim')->on('mahasiswas')->cascadeOnDelete();
            $table->foreign('matakuliah_id')->references('kode_mk')->on('matakuliahs')->cascadeOnDelete();
        });
    }

    public function down(): void{
        Schema::dropIfExists('nilai_matakuliahs');
    }
};