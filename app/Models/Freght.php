<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Freght extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
    ];

    public function FreightManagement()
    {
        return $this->belongsTo('FreightManagement::class');
    }
}
