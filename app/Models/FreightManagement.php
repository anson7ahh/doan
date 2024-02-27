<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FreightManagements extends Model
{
    use HasFactory;
    protected $fillable = [
        'status',
        'price',
        'payer',

    ];
    public function Freight()
    {
        return $this->hasMany('Freight::class');
    }
    public function ItineraryManagements()
    {
        return $this->hasone('ItineraryManagements::class');
    }
}
