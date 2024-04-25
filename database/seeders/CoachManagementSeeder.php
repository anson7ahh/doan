<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('coach_management')->insert([
            'coaches_id' => '3',
            'itinerary_management_id' => '3',
        ]);
        DB::table('coach_management')->insert([
            'coaches_id' => '2',
            'itinerary_management_id' => '3',
        ]);
        DB::table('coach_management')->insert([
            'coaches_id' => '1',
            'itinerary_management_id' => '2',
        ]);
    }
}