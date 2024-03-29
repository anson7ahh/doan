<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'phone_number',
        'birth_date',


    ];
    public function StaffManagement()
    {
        return $this->belongsTo('StaffManagement::class');
    }
    public function ItineraryManagements()
    {
        return $this->hasMany('ItineraryManagements::class');
    }
}
