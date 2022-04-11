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
            'institution_code' => 1,
            'email' => 'fleethost@gmail.com',
            'password' => bcrypt('fleetbd321'),
        ]);
        
        \App\Models\User::create([
            'name' => 'Demo User',
            'institution_code' => 1,
            'email' => 'demo@gmail.com',
            'password' => bcrypt('demobd321'),
        ]);
    }
}
