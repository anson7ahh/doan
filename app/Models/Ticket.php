<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_position', //vi tri ngoi
        'quantity', //so luong
    ];
    public function TicketsManagement()
    {
        return $this->belongsTo('TicketsManagement::class');
    }
}
