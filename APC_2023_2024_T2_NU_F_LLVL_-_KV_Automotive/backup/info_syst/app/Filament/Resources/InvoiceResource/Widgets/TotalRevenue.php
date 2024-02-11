<?php

namespace App\Filament\Resources\InvoiceResource\Widgets;

use App\Models\Invoice;
use Filament\Widgets\ChartWidget;
use Flowframe\Trend\Trend;
use Flowframe\Trend\TrendValue;
use Illuminate\Support\Carbon;
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class TotalRevenue extends ChartWidget
{
    use HasPageShield;
    protected static ?string $heading = 'Total Revenue';

    protected int | string | array $columnSpan = '2';

    protected \DateTimeInterface $start;

    public function __construct()
    {
        $this->start = now()->startOfYear();
    }

    protected function getData(): array
    {
        $dataMonth = $this->getChartData('month');
        $dataWeek = $this->getChartData('week');
        $dataYear = $this->getChartData('year');
        $dataDay = $this->getChartData('day');

        return [
            'datasets' => [
                [
                    'label' => 'Total Revenue (Month)',
                    'data' => $dataMonth->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Total Revenue (Week)',
                    'data' => $dataWeek->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Total Revenue (Year)',
                    'data' => $dataYear->map(fn (TrendValue $value) => $value->aggregate),
                ],
                [
                    'label' => 'Total Revenue (Day)',
                    'data' => $dataDay->map(fn (TrendValue $value) => $value->aggregate),
                ],
            ],
            'labels' => $dataMonth->map(fn (TrendValue $value) => $value->date),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }

    protected function getChartData(string $interval): \Illuminate\Support\Collection
    {
        $endDate = now()->endOfYear();
        $startDate = $this->start;

        switch ($interval) {
            case 'month':
                $startDate = now()->startOfMonth();
                break;
            case 'week':
                $startDate = now()->startOfWeek();
                break;
            case 'year':
                // Already set in constructor
                break;
            case 'day':
                $startDate = now()->startOfDay();
                break;
        }

        return Trend::model(Invoice::class)
            ->between(
                start: $startDate,
                end: $endDate,
            )
            ->perDay() // Use perDay() as an example; adjust based on your specific requirements
            ->sum('amount');
    }

}
