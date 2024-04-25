<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();

        $limit = 5;

        for ($i = 0; $i < $limit; $i++) {
            DB::table('tickets')->insert([
                'seat_position' => $faker->randomElement(['a', 'b', 'c']),


            ]);
        };
    }
}