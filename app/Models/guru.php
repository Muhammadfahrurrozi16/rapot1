<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    public function Mata_pelajaran(){ 
        return $this->hasMany(Mata_pelajaran::class);
        } 
}
