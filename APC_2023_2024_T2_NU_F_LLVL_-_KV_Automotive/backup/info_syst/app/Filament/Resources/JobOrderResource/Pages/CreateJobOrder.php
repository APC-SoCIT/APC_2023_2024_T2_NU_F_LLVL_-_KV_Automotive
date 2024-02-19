<?php

namespace App\Filament\Resources\JobOrderResource\Pages;

use App\Filament\Resources\JobOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use App\Models\JobOrder;
use App\Models\User;
use Filament\Notifications\Actions\Action;

class CreateJobOrder extends CreateRecord
{
    protected static string $resource = JobOrderResource::class;
    protected static ?string $title = 'Job Status';

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}

public function save(bool $shouldRedirect = true): void
{
    // Your existing save logic goes here...

    // Save the record
    parent::save($shouldRedirect);

    // Notify the authenticated user
    $recipient = auth()->user();
    Notification::make()
        ->title('Job Status Created successfully')
        ->sendToDatabase($recipient);


        }
}

