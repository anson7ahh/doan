<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PriceTicket extends Model
{
    use HasFactory;
    protected $fillable = [
        'price'
    ];

    public function PassengerInvoice()
    {
        return $this->belongsTo('PassengerInvoice::class');
    }
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
}