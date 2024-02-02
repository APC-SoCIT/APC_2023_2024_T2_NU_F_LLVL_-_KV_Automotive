<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Invoice extends Model
{
    protected $fillable = [
        'account_id',
        'created_by',
        'amount',
        'invoice_no',
        'notes',
        'image',
        // Assuming you have added this foreign key to connect with accounts
        // Add other attributes you want to allow for mass assignment here
    ];

    // Define relationships or other configurations here

    public function account(): BelongsTo
    {
        return $this->belongsTo(Account::class);
    }

    public function InVoices()
    {
        return $this->hasMany(Invoice::class);
    }

}


