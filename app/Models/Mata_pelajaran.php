<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mata_pelajaran extends Model
{
    use HasFactory;
    public function kelas(){ 
        return $this->belongsTo(kelas::class);
        }
    public function tahun_pendidikan(){ 
        return $this->belongsTo(tahun_pendidikan::class);
        }
    public function Guru(){ 
            return $this->belongsTo(Guru::class);
            }
    public function penilaian(){ 
        return $this->hasMany(penilaian::class);
        }   
  
}
