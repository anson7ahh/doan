<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryManagement extends Model
{
    use HasFactory;
    protected $fillable = [
        'start_time',
        'end_time',

    ];
    public function Itinerary()
    {
        return $this->belongsTo('Itinerary::class');
    }
    public function Invoice()
    {
        return $this->hasmany('Invoice::class');
    }
}
