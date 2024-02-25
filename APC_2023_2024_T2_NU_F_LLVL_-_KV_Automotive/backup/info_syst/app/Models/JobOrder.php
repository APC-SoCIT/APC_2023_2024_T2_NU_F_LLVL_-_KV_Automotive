<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class JobOrder extends Model
{
    use HasFactory;

    protected $fillable = ['vehicle_id', 'account_id', 'inventory_id', 'status', 'quantity_used','task_performed','performed_by'];

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

    public function VehicleHistory()
    {
        return $this->belongsTo(VehicleHistory::class);
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
                $oldInventory = Inventory::find($jobOrder->getOriginal('inventory_id'));
                if ($oldInventory) {
                    $oldInventory->increment('quantity', $jobOrder->quantity_used);
                }
                $jobOrder->inventory->decrement('quantity', $jobOrder->quantity_used);
            }
        });
    }
}
