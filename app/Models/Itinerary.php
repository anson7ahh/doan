<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Itinerary extends Model
{
    use HasFactory;
    protected $casts = [
        'itinerary' => 'array'
    ];
    protected $fillable = [
        'itinerary'
    ];

    public function ItineraryManagement()
    {
        return $this->hasMany('ItineraryManagement::class');
    }
}
