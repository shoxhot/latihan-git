<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $primaryKey = 'nim';
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = ['nim', 'nama', 'prodi', 'semester', 'no_hp'];

    public function nilai(){
        return $this->hasMany(NilaiMatakuliah::class, 'mahasiswa_id', 'nim');
    }
}