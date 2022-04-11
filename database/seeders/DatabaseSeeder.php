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
        // \App\Models\User::factory(10)->create();
        \App\Models\User::create([
            'name' => 'Fleet Host',
            'institution_code' => 101,
            'email' => 'fleethost@gmail.com',
            'password' => bcrypt('fleetbd321'),
        ]);
    }
}
