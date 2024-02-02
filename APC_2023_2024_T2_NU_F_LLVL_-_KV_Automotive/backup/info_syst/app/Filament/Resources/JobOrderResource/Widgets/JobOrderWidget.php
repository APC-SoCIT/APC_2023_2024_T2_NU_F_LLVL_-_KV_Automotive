<?php

namespace App\Filament\Resources\JobOrderResource\Widgets;

use App\Models\JobOrder;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;


class JobOrderWidget extends BaseWidget
{
    protected int | string | array $columnSpan = 'full';
    public function table(Table $table): Table
    {
        return $table
            ->query(
              JobOrder::WhereDate('Created_at','>', now()->subDays(104)->startOfDay())
            )
            ->columns([
                Tables\Columns\TextColumn::make('Account.full_name')
                    ->sortable(),
                    Tables\Columns\TextColumn::make('status')
                    ->sortable()
                    ->badge()
                    ->color(function(string $state) : string{
                          return match($state) {
                            'pending' => 'primary',
                            'in_progress' => 'info',
                            'completed' => 'success',
                          };
                    }),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }

    public static function canView(): bool
    {
        return auth()->user()->isAdmin() || auth()->user()->isStaff();

    }

}
