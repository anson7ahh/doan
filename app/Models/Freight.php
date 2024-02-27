<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class freight extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight',
    ];

    public function FreightManagements()
    {
        return $this->belongsTo('FreightManagements::class');
    }
}
