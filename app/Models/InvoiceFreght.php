<?php

namespace App\Models;


use App\Enums\InvoiceFreghtPayerEnum;
use App\Enums\InvoiceFreghtStatusEnum;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class InvoiceFreght extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'price', 'payer', 'recipient_phone_number'];
    protected $casts = [
        'status' => InvoiceFreghtStatusEnum::class,
        'payer' => InvoiceFreghtPayerEnum::class,
    ];
    public function ItineraryManagement()
    {
        return $this->belongsTo('ItineraryManagement::class');
    }
     public function User()
    {
    return $this->belongsTo('User::class');
    }
    public function Freght(){
        return $this->hasmany('Freght::class');
    }
}