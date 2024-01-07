<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $dates = ['birthdate'];

    protected $fillable = ['first_name', 'middle_name', 'last_name', 'email', 'password', 'birthdate', 'phone_number', 'address', 'city', 'country', 'full_name'];
    
    public function getFullNameAttribute()
    {
        return "{$this->first_name} {$this->middle_name} {$this->last_name}";
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($account) {
            $account->full_name = $account->getFullNameAttribute();
        });

        static::updating(function ($account) {
            $account->full_name = $account->getFullNameAttribute();
        });
    }
    
}
