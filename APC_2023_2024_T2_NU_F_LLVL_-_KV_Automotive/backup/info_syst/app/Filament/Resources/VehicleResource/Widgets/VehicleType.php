<?php

namespace App\Filament\Resources\VehicleResource\Widgets;

use App\Models\Vehicle;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class VehicleType extends ChartWidget
{
    use HasPageShield;
    protected static ?string $heading = 'Vehicle Entry';

    protected int | string | array $columnSpan = '1';

    protected function getData(): array
    {
        $data = Trend::model(Vehicle::class)
            ->between(
                start: now()->startOfYear(),
                end: now()->endOfYear(),
            )
            ->perMonth()
            ->count();

        // Map the date labels to month names (short form)
        $monthLabels = $data->map(function (TrendValue $value) {
            return Carbon::parse($value->date)->format('M');
        });

        return [
            'datasets' => [
                [
                    'label' => 'Vehicles Entry',
                    'data' => $data->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $monthLabels,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

}
