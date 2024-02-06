<?php

namespace App\Filament\Resources\InventoryResource\Widgets;

use App\Models\Inventory;
use Filament\Widgets\ChartWidget;


class Totalsales extends ChartWidget
{
    protected static ?string $heading = 'Total Stock';

    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getData(): array
    {
        $inventoryData = Inventory::select('product_name', 'quantity')->get();

        $labels = ['Total Stock'];

        $datasets = [];
        foreach ($inventoryData->groupBy('product_name') as $product => $data) {
            $totalStock = $data->sum('quantity');
            $datasets[] = [
                'label' => $product,
                'data' => [$totalStock],
            ];
        }

        return [
            'labels' => $labels,
            'datasets' => $datasets,
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
