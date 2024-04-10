<?php

namespace Database\Seeders;

use App\Models\Itinerary;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ItinerarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Itinerary::create([

            // 'itinerary' => [

            //     'normal' => [
            //         'roadway1' => [
            //             'destination' => 'Nghệ An',
            //             'arrival' => 'Thanh Hóa',
            //             'price' => '250000 vnd',
            //         ],
            //         'roadway2' => [
            //             'destination' => 'Thanh Hóa ',
            //             'arrival' => 'Hà Nội',
            //             'price' => '100000 vnd',
            //         ],
            //     ],
            //     'vip' => [
            //         'roadway1' => [
            //             'destination' => 'Nghệ An',
            //             'arrival' => 'Thanh Hóa',
            //             'price' => '300000 vnd',
            //         ],
            //         'roadway2' => [
            //             'destination' => 'Thanh Hóa ',
            //             'arrival' => 'Hà Nội',
            //             'price' => '150000 vnd',
            //         ]
            //     ],
            //     'freght' => [
            //         'roadway1' => [
            //             'destination' => 'Nghệ An',
            //             'arrival' => 'Thanh Hóa',
            //             'price' => '30000 vnd',
            //         ],
            //         'roadway2' => [
            //             'destination' => 'Thanh Hóa ',
            //             'arrival' => 'Hà Nội',
            //             'price' => '20000 vnd',
            //         ]
            //     ],

            // ],



        ]);
    }
}
