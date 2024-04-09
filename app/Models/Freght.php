<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freght extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
        'freght_name'
    ];

    public function FreightManagement()
    {
        return $this->belongsTo('FreightManagement::class');
    }
}