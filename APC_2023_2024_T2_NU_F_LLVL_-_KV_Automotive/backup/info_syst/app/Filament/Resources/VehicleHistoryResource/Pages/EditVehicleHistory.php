<?php

namespace App\Filament\Resources\VehicleHistoryResource\Pages;

use App\Filament\Resources\VehicleHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditVehicleHistory extends EditRecord
{
    protected static string $resource = VehicleHistoryResource::class;

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
}
