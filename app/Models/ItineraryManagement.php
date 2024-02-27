<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryManagements extends Model
{
    use HasFactory;

    protected $casts = [
        'price' => 'array'
    ];
    protected $fillable = [
        'price'
    ];
    public function Itinerary()
    {
        return $this->hasmany('Itinerary::class');
    }
    public function Invoice()
    {
        return $this->hasmany('Invoice::class');
    }
}
