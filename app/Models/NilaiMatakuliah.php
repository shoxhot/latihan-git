<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiMatakuliah extends Model
{
    use HasFactory;

    protected $fillable = ['mahasiswa_id', 'matakuliah_id', 'nilai'];

    public function mahasiswa(){
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }

    public function matakuliah(){
        return $this->belongsTo(Matakuliah::class, 'matakuliah_id', 'kode_mk');
    }
}