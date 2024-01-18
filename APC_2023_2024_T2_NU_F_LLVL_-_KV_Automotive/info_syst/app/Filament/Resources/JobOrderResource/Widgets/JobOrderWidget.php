<?php

namespace App\Filament\Resources\JobOrderResource\Widgets;

use App\Models\JobOrder;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class JobOrderWidget extends BaseWidget
{
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
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ]);
    }
}
