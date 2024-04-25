<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TicketManagement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TicketManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TicketManagement::create([
            'ticket_id' => 1,
            'coach_management_id' => 3,
        ]);
        TicketManagement::create([
            'ticket_id' => 2,
            'coach_management_id' => 3,
        ]);
        TicketManagement::create([
            'ticket_id' => 3,
            'coach_management_id' => 3,
        ]);
    }
}