<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChallengesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('challenges')->insert([
            ['name' => 'الرسام','challenge_type_id'=>2],
            ['name' => 'الباسورد','challenge_type_id'=>2],
            ['name' => 'الشخصيات','challenge_type_id'=>1],
            ['name' => 'التشكيله','challenge_type_id'=>2],
            ['name' => 'الانتقالات','challenge_type_id'=>2],
            ['name' => 'من سيربح المليون','challenge_type_id'=>1],
            ['name' => 'مين يزود','challenge_type_id'=>2],
            ['name' => 'إختبر نفسك','challenge_type_id'=>1],

        ]);
    }
}
