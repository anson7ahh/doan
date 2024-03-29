<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Itinerary extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time',
        'end_time',

    ];
    public function ItineraryManagements()
    {
        return $this->belongsTo('ItineraryManagements::class');
    }
}
