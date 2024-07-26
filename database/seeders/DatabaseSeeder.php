<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call(ChallengeTypesTableSeeder::class);
        $this->call(ChallengesTableSeeder::class);
//        User::create([
//            'name' => 'admin',
//            'email' => 'admin@site.com',
//            'password' => 'admin',
//        ]);
    }
}
