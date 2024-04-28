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
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-04-27 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-4-28 5:40'),
            'itineraries_id' => 1,
            'coaches_id' => 3,
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-4-20 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-4-29 5:40'),
            'itineraries_id' => 2,
            'coaches_id' => 2
        ]);
        ItineraryManagement::create([
            'start_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-4-29 21:40'),
            'end_time' => Carbon::createFromFormat('Y-m-d H:i', '2024-4-30 5:40'),
            'itineraries_id' => 3,
            'coaches_id' => 2,
        ]);
    }
}