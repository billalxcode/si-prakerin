<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'guru_id', 'jurusan_id'];

    public function siswas() {
        return $this->hasMany(Siswa::class);
    }

    public function guru() {
        return $this->belongsTo(Guru::class);
    }

    public function jurusan() {
        return $this->belongsTo(Jurusan::class);
    }
}
