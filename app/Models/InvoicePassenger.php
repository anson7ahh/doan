<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePassenger extends Model
{
    use HasFactory;


    public function User()
    {
        return $this->belongsTo('User::class');
    }
    public function Coach()
    {
        return $this->belongsTo('Coach::class');
    }
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
    public function Ticket()
    {
        return $this->belongsTo('Ticket::class');
    }
}