<?php

namespace App\Filament\Resources\InventoryResource\Widgets;

use App\Models\Inventory; // Assuming your Inventory model is in the App\Models namespace
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;


class TotalInventory extends BaseWidget
{

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Total Inventory Items', Inventory::count())
                ->color('primary')
                ->icon('heroicon-o-archive-box-arrow-down')
                ->color('warning')
                ->chart([7, 2, 10, 3, 15, 4, 17])
        ];
    }

        public static function canView(): bool
    {
        $user = auth()->user();

        return $user->isAdmin() || $user->isStaff();
    }
    }

