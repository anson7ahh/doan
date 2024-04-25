<?php

namespace Database\Seeders;

use App\Models\StaffManagement;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffManagemnentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        StaffManagement::create([
            'staff_id' => '1',
            'itinerary_management_id' => '2',
        ]);
        StaffManagement::create([
            'staff_id' => '2',
            'itinerary_management_id' => '2',
        ]);
        StaffManagement::create([
            'staff_id' => '2',
            'itinerary_management_id' => '2',
        ]);
        StaffManagement::create([
            'staff_id' => '1',
            'itinerary_management_id' => '3',
        ]);
    }
}