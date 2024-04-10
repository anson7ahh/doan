<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PassengerInvoice extends Model
{
    use HasFactory;
     protected $fillable = ['status', 'price', 'payer', 'recipient_phone_number'];
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
    public function User()
    {
    return $this->belongsTo('User::class');
    }
}