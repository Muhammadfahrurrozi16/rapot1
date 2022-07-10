<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class tahunajaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('tahun_pendidikans')->insert(
            array (
            [
             'tahun_ajaran'=> '2020/2021'
             ,'semester' => 'ganjil' 
            ],
            [
              'tahun_ajaran'=> '2020/2021'
             ,'semester' => 'genap' 
            ])
        );
    }
}
