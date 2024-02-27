<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;
    public function ItineraryManagements()
    {
        return $this->belongsTo('ItineraryManagements::class');
    }
    public function User()
    {
        return $this->belongsTo('User::class');
    }
}
