<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachManagements extends Model
{
    use HasFactory;

    public function Coach()
    {
        return $this->hasMany('Coach::class');
    }
    public function TicketsManagement()
    {
        return $this->hasMany('TicketsManagement::class');
    }
    public function ItineraryManagements()
    {
        return $this->hasMany('ItineraryManagements::class');
    }
}
