<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'quantity',
        'price',
        'status',
        // Add other attributes you want to allow for mass assignment here
    ];
    protected $casts = [
        'price' => 'decimal:2',
    ];

    public function getStatusAttribute()
    {
        if ($this->quantity < 10) {
            return 'Low Stock';
        } else {
            return 'In Stock';
        }
    }
}
