<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $fillable = [
        'license_plate',
        'pickup_point',
        'destination',
        'total_tickets',
        'user_id',
        'ticket_id',
        'freights_id',
    ];
    public function ticket()
    {
        return $this->hasMany('Ticket::class');
    }
    public function freight()
    {
        return $this->hasMany('Freight::class');
    }
    public function staff()
    {
        return $this->hasMany('Staff::class');
    }
}
