<?php

namespace App\Models;


use App\Enums\StartingPoinEnum;
use App\Enums\VehicleTypeCoachEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Itinerary extends Model
{
    use HasFactory;
  
    protected $fillable = [
        'itinerary'
    ];
    protected $casts = [
        'starting-poin' => StartingPoinEnum::class,
        'vehicle_type' => VehicleTypeCoachEnum::class,//loai xe
        
    ];
    public function ItineraryManagement()
    {
        return $this->hasMany('ItineraryManagement::class');
    }
}