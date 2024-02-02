<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobOrder extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'account_id', 'inventory_id', 'status', 'quantity_used'];

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function inventory(): BelongsTo
    {
        return $this->belongsTo(Inventory::class);
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($jobOrder) {
            // Reduce the quantity when creating a new job order
            $jobOrder->inventory->decrement('quantity', $jobOrder->quantity_used);
        });

        static::updating(function ($jobOrder) {
            // Check if the inventory is updated, then handle the quantity change
            if ($jobOrder->isDirty('inventory_id')) {
                // Increase the quantity for the old inventory
                $jobOrder->getOriginal('inventory_id') && Inventory::find($jobOrder->getOriginal('inventory_id'))->increment('quantity', $jobOrder->quantity_used);
                // Reduce the quantity for the new inventory
                $jobOrder->inventory->decrement('quantity', $jobOrder->quantity_used);
            }
        });
    }
}
