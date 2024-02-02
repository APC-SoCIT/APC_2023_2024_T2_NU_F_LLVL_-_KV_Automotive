<?php

namespace App\Filament\Resources\AccountResource\Widgets;

use Filament\Widgets\ChartWidget;

class TotalAccounts extends ChartWidget
{
    protected static ?string $heading = 'Chart';

    protected function getData(): array
    {
        return [
            //
        ];
    }

    protected function getType(): string
    {
        return 'line';
    }
}
