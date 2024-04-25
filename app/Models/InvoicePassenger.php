<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePassenger extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'payer', 'recipient_phone_number'];
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
    public function User()
    {
        return $this->belongsTo('User::class');
    }
    public function Freght()
    {
        return $this->hasmany('Freght::class');
    }
    public function PriceTicket()
    {
        return $this->hasMany('PriceTicket::class');
    }
}