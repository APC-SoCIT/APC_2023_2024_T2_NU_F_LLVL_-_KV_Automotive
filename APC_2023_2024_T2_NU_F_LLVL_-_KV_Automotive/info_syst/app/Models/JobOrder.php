<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        return $this->BelongsTo(Inventory::class);
    }



    public static function boot()
    {
        parent::boot();

        static::creating(function ($jobOrder) {
            // Reduce the quantity when creating a new job order
            $inventoryRelation = $jobOrder->inventory;
            if ($inventoryRelation) {
                $inventoryRelation->each(function ($inventory) use ($jobOrder) {
                    $inventory->decrement('quantity', $jobOrder->quantity_used);
                });
            }
        });

        static::updating(function ($jobOrder) {
            // Check if the inventory is updated, then handle the quantity change
            if ($jobOrder->isDirty('inventory_id')) {
                // Increase the quantity for the old inventory
                $originalInventory = Inventory::find($jobOrder->getOriginal('inventory_id'));
                if ($originalInventory) {
                    $originalInventory->increment('quantity', $jobOrder->quantity_used);
                }

                // Reduce the quantity for the new inventory
                $inventoryRelation = $jobOrder->inventory;
                if ($inventoryRelation) {
                    $inventoryRelation->each(function ($inventory) use ($jobOrder) {
                        $inventory->decrement('quantity', $jobOrder->quantity_used);
                        // No need to associate with HasMany, as it's already a relationship
                        $inventory->save();
                    });
                }
            }
        });
    }




}
