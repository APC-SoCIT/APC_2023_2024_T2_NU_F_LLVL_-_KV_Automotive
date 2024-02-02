<?php

namespace App\Filament\Resources\JobOrderResource\Pages;

use App\Filament\Resources\JobOrderResource;
use App\Filament\Resources\JobOrderResource\Widgets\JobOrderWidget;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Notifications\Notification;
use App\Models\User;
use Filament\Actions\Action;

class ListJobOrders extends ListRecords
{
    protected static string $resource = JobOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
    protected function getHeaderWidgets(): array
    {
        return [

        ];
    }
    public function save(bool $shouldRedirect = true): void
    {
        // Your existing save logic goes here...

        // Check if the options for the 'status' column have changed
        $originalOptions = $this->record::getField('status')->getOptions();
        $newOptions = [
            'pending' => 'Pending',
            'in_progress' => 'In Progress',
            'completed' => 'Completed',
        ];

        if ($originalOptions !== $newOptions) {
            // Notify users about the change in options
            $users = User::all();
            $notificationBody = 'The options for the "status" column have been updated.';

            foreach ($users as $user) {
                Notification::make()
                    ->title('Status Options Update')
                    ->icon('heroicon-o-information-circle')
                    ->iconColor('info')
                    ->body($notificationBody)
                    ->actions([
                        Action::make('Mark as Read')->markAsRead(),
                    ])
                    ->sendToDatabase($user);
            }
        }

        // Save the record
        parent::save($shouldRedirect);
    }
}
