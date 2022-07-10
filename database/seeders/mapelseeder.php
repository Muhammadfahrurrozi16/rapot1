<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class mapelseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mata_pelajarans')->insert(
            array (
            [
             'kelas_id'=> '1'
             ,'tahun_pendidikan_id' => '1'
             ,'user_id' => '1'
             ,'guru_id' => '1'
             ,'mata_pelajaran'=> 'bahasa indonesia'
            ],
            [
              'kelas_id'=> '1'
             ,'tahun_pendidikan_id' => '1'
             ,'user_id' => '1'
             ,'guru_id' => '2'
             ,'mata_pelajaran'=> 'fisika' 
            ])
        );
    }
}
