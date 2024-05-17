<?php

namespace Database\Seeders;

use App\Models\Staff;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StaffSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Staff::create([
            'fullname' => 'Nguyễn van a',
            'phone_number' => '0942022396',
            'birth_date' => '1990-01-01',
            'gender' => 'male',
            'position' => 'accounting'
        ]);
        Staff::create([
            'fullname' => 'Nguyễn van ab',
            'phone_number' => '09999',
            'birth_date' => '1990-01-01',
            'gender' => 'male',
            'position' => 'driver'
        ]);
        Staff::create([
            'fullname' => 'Nguyễn van ab',
            'phone_number' => '09999919',
            'birth_date' => '1990-01-01',
            'gender' => 'male',
            'position' => 'assistant driver'
        ]);
    }
}