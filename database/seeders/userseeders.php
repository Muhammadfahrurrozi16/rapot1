<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class userseeders extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            array (
            [
             'name'=> 'dika'
             ,'email' => 'andika21@gmail.com'
             ,'password' => '4321345'  
            ])
        );
    }
}
