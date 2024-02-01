<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'description',
        'quantity',
        'price',
        // Add other attributes you want to allow for mass assignment here
    ];


    public function jobOrder(): BelongsToMany
    {
        return $this->belongsToMany(Inventory::class);
    }


}
