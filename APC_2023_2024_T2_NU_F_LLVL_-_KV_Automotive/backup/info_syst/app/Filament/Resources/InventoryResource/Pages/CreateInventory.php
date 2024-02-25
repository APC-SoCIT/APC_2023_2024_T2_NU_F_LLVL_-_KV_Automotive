<?php

namespace App\Filament\Resources\InventoryResource\Pages;

use App\Filament\Resources\InventoryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Filament\Notifications\Notification;
use App\Models\User;
use Filament\Notifications\Actions\Action;

class CreateInventory extends CreateRecord
{
    protected static string $resource = InventoryResource::class;

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
public function save(bool $shouldRedirect = true): void
{
    // Your existing save logic goes here...

    // Save the record
    parent::save($shouldRedirect);

    // Notify additional users based on low stock
    $editedInventory = $this->record;
    $lowStockThreshold = 10; // Define your low stock threshold

    if ($editedInventory->quantity < $lowStockThreshold) {
        $usersToNotify = User::where('role', 'admin')->get(); // Example: Notify all admin users

        if ($usersToNotify->isNotEmpty()) {
            $productName = $editedInventory->product_name ?? 'Product';
            $notificationBody = "Low stock for $productName. Current quantity: {$editedInventory->quantity}";

            foreach ($usersToNotify as $user) {
                Notification::make()
                    ->title('Low Stock Notification')
                    ->icon('heroicon-o-exclamation-circle')
                    ->iconColor('warning')
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
}
