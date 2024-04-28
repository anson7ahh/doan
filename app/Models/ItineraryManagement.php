<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItineraryManagement extends Model
{

    use HasFactory;
    protected $dates  = [
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
    public function TicketManagement()
    {
        return $this->hasMany('TicketManagement::class');
    }

    public function StaffManagement()
    {
        return $this->belongsTo('StaffManagement::class');
    }
}