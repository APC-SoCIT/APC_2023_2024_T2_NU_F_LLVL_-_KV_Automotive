<?php

namespace App\Filament\Resources\JobOrderResource\Pages;

use App\Filament\Resources\JobOrderResource;
use Filament\Actions;
use Filament\Notifications\Notification;
use App\Models\JobOrder;
use App\Models\User;
use Filament\Notifications\Actions\Action;

class EditJobOrder extends \Filament\Resources\Pages\EditRecord
{
    protected static string $resource = JobOrderResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

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
            ->title('Saved successfully and Notified')
            ->sendToDatabase($recipient);

        // Notify additional users based on account association
        $editedJobOrder = $this->record;
        $accountId = $editedJobOrder->account->user_id ?? null;
        $status = $editedJobOrder->status ?? null; // Replace 'status' with the actual column name in your JobOrder model
        $vehicleName = $editedJobOrder->vehicle->model ?? null; // Replace 'name' with the actual column name for the vehicle name

        if ($accountId !== null && $status !== null && $vehicleName !== null) {
            $usersInAccount = User::where('id', $accountId)->get();
            $notificationBody = '';
            $iconColor = 'warning'; // Default color

            // Customize body and icon color based on status
            switch ($status) {
                case 'pending':
                    $notificationBody = "Your $vehicleName is pending for service.";
                    $iconColor = 'info'; // Change to the desired color for pending status
                    break;
                case 'in_progress':
                    $notificationBody = "The service for $vehicleName is in progress.";
                    $iconColor = 'primary'; // Change to the desired color for in progress status
                    break;
                case 'completed':
                    $notificationBody = "Your $vehicleName is ready for pick up.";
                    $iconColor = 'success'; // Change to the desired color for completed status
                    break;
                default:
                    $notificationBody = 'ERROR CONTACT THE STAFF REGARDING THIS ISSUE';
                    break;
            }

            foreach ($usersInAccount as $user) {
                Notification::make()
                    ->title('Vehicle Update')
                    ->icon('heroicon-o-information-circle')
                    ->iconColor($iconColor)
                    ->body($notificationBody)
                    ->actions([
                        Action::make('Mark as Read')
                            ->markAsRead(),
                    ])
                    ->sendToDatabase($user);
            }
        }
    }


}
