<?php

namespace App\Models;

use App\Enums\StaffPositionEnum;
use Illuminate\Database\Eloquent\Model;
use App\Enums\FreightManagementsPayerEnum;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FreghtManagement extends Model
{
    use HasFactory;
    protected $casts = [
        'Payer' => FreightManagementsPayerEnum::class,
        'Status' => StaffPositionEnum::class
    ];
    protected $fillable = [
        'status',
        'price',
        'payer',

    ];
    public function Freight()
    {
        return $this->hasMany('Freight::class');
    }
    public function ItineraryManagement()
    {
        return $this->hasone('ItineraryManagement::class');
    }
}
