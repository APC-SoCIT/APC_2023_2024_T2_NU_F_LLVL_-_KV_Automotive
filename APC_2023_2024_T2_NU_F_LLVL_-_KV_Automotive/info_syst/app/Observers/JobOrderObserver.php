<?php

namespace App\Observers;

use App\Models\JobOrder;
use Filament\Notifications\Notification;

class JobOrderObserver
{
    /**
     * Handle the JobOrder "created" event.
     */
    public function created(JobOrder $jobOrder): void
    {
        //

        Notification::make()
            ->title('Saved successfully')
            ->sendToDatabase($jobOrder->user);
    }

    /**
     * Handle the JobOrder "updated" event.
     */
    public function updated(JobOrder $jobOrder): void
    {

        Notification::make()
            ->title('Saved successfully')
            ->sendToDatabase($jobOrder->user);
    }

    /**
     * Handle the JobOrder "deleted" event.
     */
    public function deleted(JobOrder $jobOrder): void
    {
        //
    }

    /**
     * Handle the JobOrder "restored" event.
     */
    public function restored(JobOrder $jobOrder): void
    {
        //
    }

    /**
     * Handle the JobOrder "force deleted" event.
     */
    public function forceDeleted(JobOrder $jobOrder): void
    {
        //
    }
}
