<?php

namespace App\Models;

use App\Models\Itinerary;
use App\Models\PassengerInvoice;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
    public function InvoiceFreght()
    {
        return $this->hasmany('InvoiceFreght::class');
    }
     public function PassengerInvoice()
    {
        return $this->hasmany('PassengerInvoice::class');
    }
}