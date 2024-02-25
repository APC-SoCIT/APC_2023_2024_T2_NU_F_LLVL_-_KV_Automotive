<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Vehicle extends Model
{
    protected $fillable = [
        'account_id',
        'make',
        'model',
        'year',
        'license_plate',
        'color',
        'chassis_no',
        'fuel_type',
        'transmission',
        'notes',
        'image',
        'miles_per_gallon',
        'mileage',
        'engine_no',
        'make_and_model',// Assuming you have added this foreign key to connect with accounts
        // Add other attributes you want to allow for mass assignment here
    ];



    // Define relationships or other configurations here

        public function account(): BelongsTo
        {
            return $this->belongsTo(Account::class);
        }

    public function jobOrders()
    {
        return $this->hasMany(JobOrder::class);
    }

    protected $casts = [
        'image' => 'array',
    ];

    public function getMakeAndModelAttribute()
    {
        return "{$this->make} {$this->model}";
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($vehicle) {
            $vehicle->make_and_model = $vehicle->getMakeAndModelAttribute();
        });

        static::updating(function ($vehicle) {
            $vehicle->make_and_model = $vehicle->getMakeAndModelAttribute();
        });
    }

}



