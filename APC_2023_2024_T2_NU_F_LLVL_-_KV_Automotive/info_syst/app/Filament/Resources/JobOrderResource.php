<?php

namespace App\Filament\Resources;

use App\Filament\Resources\JobOrderResource\Pages;
use App\Filament\Resources\JobOrderResource\RelationManagers;
use App\Models\JobOrder;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class JobOrderResource extends Resource
{
    protected static ?string $model = JobOrder::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard';
    protected static ?string $navigationGroup = 'Information Management';
    protected static ?int $navigationSort = 2;
    protected static ?string $slug = 'Job_Order';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Forms\Components\Select::make('account_id')
                ->relationship(name: 'account', titleAttribute: 'full_name')
                ->searchable()
                ->native(false)
                ->required(),
                Forms\Components\Select::make('vehicle_id')
                ->relationship(name: 'vehicle', titleAttribute: 'model')
                ->searchable()
                ->native(false)
                ->required(),
                Forms\Components\Select::make('status')
                ->required()
                ->options([
                    'pending' => 'Pending',
                    'in_progress' => 'In Progress',
                    'completed' => 'Completed',
                ])
                ->default('pending'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account.full_name')
                ->sortable(),
                Tables\Columns\TextColumn::make('vehicle.model')
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
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListJobOrders::route('/'),
            'create' => Pages\CreateJobOrder::route('/create'),
            'view' => Pages\ViewJobOrder::route('/{record}'),
            'edit' => Pages\EditJobOrder::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        $query = parent::getEloquentQuery();

        if ($user->isAdmin() || $user->isStaff()) {
            // Admin can see all users
            return $query;
        } else {
            // Other users can only see their own record
            return $query->whereHas('account', function ($accountQuery) use ($user) {
                $accountQuery->where('id', $user->account->id);
            });
        }
    }
}
