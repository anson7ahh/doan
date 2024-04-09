<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceFreght extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'price',
                    'payer',
        'recipient_phone_number',
    ];

    public function ItineraryManagement()
    {
        return $this->hasone('ItineraryManagement::class');
    }
}