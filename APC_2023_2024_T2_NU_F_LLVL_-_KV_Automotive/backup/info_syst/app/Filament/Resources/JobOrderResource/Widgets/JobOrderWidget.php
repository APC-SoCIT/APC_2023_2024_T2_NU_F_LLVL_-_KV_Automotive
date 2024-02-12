<?php

namespace App\Filament\Resources\JobOrderResource\Widgets;

use App\Models\JobOrder;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;




class JobOrderWidget extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];
    public function table(Table $table): Table
    {
        $user = auth()->user();

        // Get the query based on user role
        $query = JobOrder::query();
        if (!$user->isAdmin() && !$user->isStaff()) {
            $query->whereHas('account', function ($accountQuery) use ($user) {
                $accountQuery->where('user_id', $user->id);
            });
        }

        return $table
            ->query($query)
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


}
