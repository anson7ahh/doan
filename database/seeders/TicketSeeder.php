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

        DB::table('tickets')->insert([
            'seat_position' => 'A1',
            'userName' => 'son',
            'user_id' => 11,
            'phoneNumber' => 941042988,
            'coaches_id' => '2',
            'created_at' => '2024-05-05 06:22:2',
            'updated_at' => '2024-05-05 06:22:2 '

        ]);
    }
}