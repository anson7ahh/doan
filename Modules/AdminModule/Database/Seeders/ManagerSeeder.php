<?php

namespace Modules\AdminModule\Database\Seeders;

use App\Models\Staff;

use App\Enums\StaffGenderEnum;
use Illuminate\Database\Seeder;
use App\Enums\StaffPositionEnum;


class ManagerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      

        
            Staff::create([
                'fullname' => 'son',
                'phone_number' => '094104222',
                'birth_date' => '1999-01-01',
                'position'=>StaffPositionEnum::manager,
                'gender'=>StaffGenderEnum::male
               
            ]);
        }
    
}