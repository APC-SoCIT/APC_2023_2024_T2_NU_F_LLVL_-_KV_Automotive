<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vehicle extends Model
{
    use HasFactory;

    protected $fillable= [
            'Fname',
            'Mname',
            'Lname',
            'model',
            'make',
            'plate_no',
            'chassis_no',
            'engine_no',
            'transmission',
            'FuelType',
            'vehicle_history',
    ];

    protected $table = 'vehicle';
}

