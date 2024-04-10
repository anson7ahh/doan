<?php

namespace Database\Seeders;

use App\Models\Coach;
use App\Enums\CoachServiceEnum;
use Illuminate\Database\Seeder;
use App\Enums\VehicleTypeCoachEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Coach::create([
        'license_plate'=>'37a-1231231',
        'coach_maintenance_date'=>'2015-04-04',
        'service'=>'user',
        'vehicle_type'=>'regular'

     ]);
    }
}