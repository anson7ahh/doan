<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TicketManagement extends Model
{
    use HasFactory;
    public function Ticket()
    {
        return $this->hasMany('Ticket::class');
    }
    public function CoachManagement()
    {
        return $this->belongsTo('CoachManagement::class');
    }
}