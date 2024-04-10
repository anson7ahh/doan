<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketManagement extends Model
{
    use HasFactory;
       protected $fillable = [
        'sum_quantity',
     
    ];
    public function Ticket()
    {
        return $this->hasmany('ticket::class');
    }
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
}
