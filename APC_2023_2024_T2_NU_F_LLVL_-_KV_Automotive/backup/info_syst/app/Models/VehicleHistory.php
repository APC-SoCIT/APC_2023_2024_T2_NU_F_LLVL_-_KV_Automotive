<?php

namespace App\Models;

use App\Models\Account;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VehicleHistory extends Model
{
    protected $table = 'vehicle_history';

    protected $fillable = [
        'account_id',
        'vehicle_id',
        'task_performed',
        'performed_by',
        'validated_by',
        'notes'
    ];

    protected $casts = [
       'task_performed' => 'json',
    ];
    // Define relationships if needed
    public function account()
    {
        return $this->belongsTo(Account::class, 'account_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id');
    }

    public function jobOrders()
    {
        return $this->hasMany(JobOrder::class);
    }


    public function getFirstTaskAttribute()
{
    $taskPerformed = json_decode($this->attributes['task_performed'], true);

    if (!empty($taskPerformed) && is_array($taskPerformed)) {
        $firstTask = data_get($taskPerformed[0], 'task', '');
        return $firstTask;
    }

    return '';
}






}
