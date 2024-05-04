<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PriceTicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('price_tickets')->insert([
            'price' => '400000',
            'itineraries_id' => '4'
        ]);
        DB::table('price_tickets')->insert([
            'price' => '350000',
            'itineraries_id' => '2'
        ]);
        DB::table('price_tickets')->insert([
            'price' => '350000',
            'itineraries_id' => '1'
        ]);
    }
}