<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(siswaseeder::class);
        $this->call(guruseeder::class);
        $this->call(userseeders::class);
        $this->call(kelasseeder::class);
        $this->call(tahunajaranseeder::class);
        $this->call(mapelseeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
