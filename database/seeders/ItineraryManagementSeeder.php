<?php

namespace Database\Seeders;

use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use App\Models\ItineraryManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItineraryManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ItineraryManagement::create([
            'start_time' => Carbon::create(2024, 4, 20, 21, 40),
            'end_time' => Carbon::create(2024, 4, 21, 5, 40),
            'itineraries_id' => 1,

        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::create(2024, 4, 20, 21, 40),
            'end_time' => Carbon::create(2024, 4, 21, 5, 40),
            'itineraries_id' => 2,

        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::create(2024, 4, 20, 21, 40),
            'end_time' => Carbon::create(2024, 4, 21, 5, 40),
            'itineraries_id' => 3,
        ]);
    }
}