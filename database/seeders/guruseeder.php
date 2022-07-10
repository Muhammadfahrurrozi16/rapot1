<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class guruseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gurus')->insert(
            array (
            [
             'name'=> 'andika'
             ,'email' => 'andika31@gmail.com'
             ,'password' => '12345'  
            ],
            [
            'name'=> 'herman'
            ,'email' => 'herman12@gmail.com'
            ,'password' => '12346'  
            ])
        );
    }
}
