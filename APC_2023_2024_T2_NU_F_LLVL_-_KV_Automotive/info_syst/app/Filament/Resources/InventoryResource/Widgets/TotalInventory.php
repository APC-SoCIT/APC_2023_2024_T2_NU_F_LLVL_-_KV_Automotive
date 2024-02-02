<?php

namespace App\Filament\Resources\InventoryResource\Widgets;

use App\Models\Inventory; // Assuming your Inventory model is in the App\Models namespace
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalInventory extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Inventory Items', Inventory::count())
                ->color('primary')
                ->icon('heroicon-o-User'),
        ];
    }
}

