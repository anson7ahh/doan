<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Freight extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
        'coaches_id',
        'user_id',
        'departure_time',
        'arrival_time',
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
