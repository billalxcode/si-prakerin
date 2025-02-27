<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurusan extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function kelas() {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id');
    }
}
