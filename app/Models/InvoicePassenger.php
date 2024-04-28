<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoicePassenger extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'payer', 'recipient_phone_number'];

    public function User()
    {
        return $this->belongsTo('User::class');
    }
    public function Coach()
    {
        return $this->belongsTo('Coach::class');
    }
}