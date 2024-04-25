<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StaffManagement extends Model
{
    use HasFactory;
    public function ItineraryManagement()
    {
        return $this->hasMany('ItineraryManagement::class');
    }
    public function Staff()
    {
        return $this->hasMany('Staff::class');
    }
}