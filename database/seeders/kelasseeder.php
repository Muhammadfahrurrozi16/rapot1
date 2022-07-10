<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class kelasseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelas')->insert(
            array (
            [
             'name' => 'VII' 
            ],
            [
            'name' => 'VIII'   
            ],
            [
            'name' => 'XI'   
            ])
        );
    }
}
