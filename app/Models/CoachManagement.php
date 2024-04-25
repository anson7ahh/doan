<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class CoachManagement extends Model
{
    use HasFactory;

    public function Coach()
    {
        return $this->hasMany('Coach::class');
    }

    public function ItineraryManagement()
    {
        return $this->hasMany('ItineraryManagement::class');
    }
    public function TicketManagement()
    {
        return $this->hasMany('TicketManagement::class');
    }
}