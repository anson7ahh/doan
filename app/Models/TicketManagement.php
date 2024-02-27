<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketManagement extends Model
{
    use HasFactory;
    public function Ticket()
    {
        return $this->hasmany('tickets::class');
    }
    public function ItineraryManagements()
    {
        return $this->belongsTo('ItineraryManagements::class');
    }
}
