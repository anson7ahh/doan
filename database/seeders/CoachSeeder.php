<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Enums\CoachServiceEnum;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Enums\VehicleTypeCoachEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('coaches')->insert([
            'license_plate' => '37a-1',
            'coach_maintenance_date' => '2015-04-04',
            'service' => 'freights',
            'vehicle_type' => 'Thường',
            'sum_ticket' => '38',
        ]);



        DB::table('coaches')->insert([
            'license_plate' => '37a-1122',
            'coach_maintenance_date' => '2015-04-04',
            'service' => 'user',
            'vehicle_type' => 'vip',
            'sum_ticket' => '24'
        ]);
        DB::table('coaches')->insert([
            'license_plate' => '37a-11223',
            'coach_maintenance_date' => '2015-04-04',
            'service' => 'user',
            'vehicle_type' => 'Thường',
            'sum_ticket' => '32'

        ]);
    }
}