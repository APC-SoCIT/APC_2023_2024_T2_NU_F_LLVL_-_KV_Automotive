<?php

namespace App\Filament\Resources\VehicleHistoryResource\Pages;

use App\Filament\Resources\VehicleHistoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListVehicleHistories extends ListRecords
{
    protected static string $resource = VehicleHistoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
