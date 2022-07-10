<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class siswaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswas')->insert(
            array (
            [
             'nama lengkap'=> 'adi'
             ,'username' => '212'
             ,'password' => '16072001'
             ,'Alamat'=> 'jepara'
             ,'nomer_handphone' => '0854423424123'
             ,'tanggal_lahir' => '2001-07-16'  
            ],
            [
                'nama lengkap'=> 'satria'
                ,'username' => '213'
                ,'password' => '17072001'
                ,'Alamat'=> 'jepara'
                ,'nomer_handphone' => '082324564223'
                ,'tanggal_lahir' => '2001-07-17' 
            ],
            [
                'nama lengkap'=> 'putri'
                ,'username' => '214'
                ,'password' => '18072001'
                ,'Alamat'=> 'jepara'
                ,'nomer_handphone' => '082324564224'
                ,'tanggal_lahir' => '2001-07-18'  
            ],
            [
                'nama lengkap'=> 'indra'
                ,'username' => '214'
                ,'password' => '19072001'
                ,'Alamat'=> 'jepara'
                ,'nomer_handphone' => '082324564234'
                ,'tanggal_lahir' => '2001-07-19'  
            ],
            [
                'nama lengkap'=> 'indri'
                ,'username' => '215'
                ,'password' => '20072001'
                ,'Alamat'=> 'jepara'
                ,'nomer_handphone' => '082324564225'
                ,'tanggal_lahir' => '2001-07-20'  
            ]
        )
        );
    }
}
