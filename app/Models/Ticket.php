<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $fillable = [
        'seat_position',
        'ticket_price',
        'arrival_time',
        'departure_time',
        'user_id',
        'coaches_id',
    ];
    public function coach()
    {
        return $this->belongsTo('Coach::class');
    }
    public function user()
    {
        return $this->belongsTo('User::class');
    }
}
