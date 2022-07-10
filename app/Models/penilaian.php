<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penilaian extends Model
{
    use HasFactory;
    public function Mata_pelajaran(){ 
        return $this->belongsTo(Mata_pelajaran::class);
        }
     public function siswa(){ 
        return $this->belongsTo(siswa::class);
        } 
}
