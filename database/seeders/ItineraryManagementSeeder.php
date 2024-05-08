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
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-27 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-28 5:40'),
            'itineraries_id' => 1,
            'coaches_id' => 3,
            'price' => 350000,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-15 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-16 5:40'),
            'itineraries_id' => 2,
            'coaches_id' => 3,
            'price' => 250000,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-29 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-30 5:40'),
            'itineraries_id' => 1,
            'coaches_id' => 2,
            'price' => 250000,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-27 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-5-28 5:40'),
            'itineraries_id' => 3,
            'coaches_id' => 2,
            'price' => 250000,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-6-15 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-6-16 5:40'),
            'itineraries_id' => 2,
            'coaches_id' => 2,
            'price' => 200000,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-6-29 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-6-30 5:40'),
            'itineraries_id' => 1,
            'coaches_id' => 1,
            'price' => 250000,
        ]);
    }
}