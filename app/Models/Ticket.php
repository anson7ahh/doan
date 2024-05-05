<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_position', //vi tri ngoi
        'created_at',
        'updated_at'

    ];

    public function Coach()
    {
        return $this->belongsTo('Coach::class');
    }
    public function User()
    {
        return $this->belongsTo('User::class');
    }
    public function InvoicePassenger()
    {
        return $this->hasOne('InvoicePassenger::class');
    }
}