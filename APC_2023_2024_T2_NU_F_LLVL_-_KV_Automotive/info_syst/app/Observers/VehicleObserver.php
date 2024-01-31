<?php

namespace App\Observers;

use App\Models\vehicle;
use Filament\Notifications\Notification;

class VehicleObserver
{
    /**
     * Handle the vehicle "created" event.
     */
    public function created(vehicle $vehicle): void
    {
        //
    }

    /**
     * Handle the vehicle "updated" event.
     */
    public function updated(vehicle $vehicle): void
    {
            $recipient = auth()->user();

            Notification::make()
                ->title('Saved successfully')
                ->sendToDatabase($recipient);
    }

    /**
     * Handle the vehicle "deleted" event.
     */
    public function deleted(vehicle $vehicle): void
    {
        //
    }

    /**
     * Handle the vehicle "restored" event.
     */
    public function restored(vehicle $vehicle): void
    {
        //
    }

    /**
     * Handle the vehicle "force deleted" event.
     */
    public function forceDeleted(vehicle $vehicle): void
    {
        //
    }
}
