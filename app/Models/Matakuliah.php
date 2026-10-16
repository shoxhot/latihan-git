<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matakuliah extends Model
{
    use HasFactory;

    protected $primaryKey = 'kode_mk';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['kode_mk', 'nama_mk', 'sks', 'semester', 'dosen_id'];

    public function dosen() {
        return $this->belongsTo(User::class, 'dosen_id');
    }

    public function nilai() {
        return $this->hasMany(NilaiMatakuliah::class, 'matakuliah_id', 'kode_mk');
    }

    public function mahasiswa() {
        return $this->belongsTo(Mahasiswa::class, 'mahasiswa_id', 'nim');
    }

    public function matakuliah() {
        return $this->belongsTo(Matakuliah::class, 'matakuliah_id', 'kode_mk');
    }
}
    