<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleResource\Pages;
use App\Filament\Resources\VehicleResource\RelationManagers;
use App\Models\Vehicle;
use App\Policies\VehiclePolicy;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\MarkdownEditor;
use Filament\Forms\Components\FileUpload;
use Filament\Tables\Columns\ImageColumn;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;

class VehicleResource extends Resource
{
    protected static ?string $model = Vehicle::class;


    protected static ?string $navigationIcon = 'heroicon-o-wrench';
    protected static ?string $navigationGroup = 'Information Management';
    protected static ?int $navigationSort = 2;
    protected static ?string $slug = 'Vehicle';

    public static function form(Form $form): Form
    {

        return $form
            ->schema([
                Section::make('Owner')
                ->description('Make Model Year')
                ->schema([

                    Forms\Components\Select::make('account_id')
                    ->relationship(name: 'account', titleAttribute: 'full_name')
                    ->native(false)
                    ->required()
                    ->options(function () {
                        $user = auth()->user();

                        if ($user->isAdmin() || $user->isStaff()) {
                            // Admin or staff can see all accounts with concatenated names
                            return \App\Models\Account::select('first_name', 'middle_name', 'last_name', 'id')
                                ->get()
                                ->map(function ($account) {
                                    return [
                                        'id' => $account->id,
                                        'name' => "{$account->first_name} {$account->middle_name} {$account->last_name}",
                                    ];
                                })
                                ->pluck('name', 'id');
                        } else {
                            // Other users can only see their own account with concatenated names
                            $userAccount = $user->account;
                            return [$userAccount->id => "{$userAccount->first_name} {$userAccount->middle_name} {$userAccount->last_name}"];
                        }
                    }),
                Forms\Components\TextInput::make('make')
                    ->required()
                    ->alpha()
                    ->maxLength(255),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->alpha()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->numeric(),
                ]),
                Section::make('Car')
                ->description('Descriptions')
                ->schema([
                Forms\Components\TextInput::make('license_plate')
                    ->unique()
                    ->maxLength(255),
                Forms\Components\TextInput::make('color')
                    ->maxLength(255),
                Forms\Components\TextInput::make('chassis_no')
                     ->unique()
                    ->maxLength(255),
                    Forms\Components\Select::make('fuel_type')
                    ->options([
                        'Unleaded' => 'Unleaded',
                        'Diesel' => 'Diesel',
                    ])
                    ->native(false)
                    ->required(),
                    Forms\Components\TextInput::make('miles_per_gallon')
                    ->numeric(),
                Forms\Components\Select::make('transmission')
                    ->options([
                        'Manual' => 'Manual',
                        'Automatic' => 'Automatic',
                    ])
                    ->native(false)
                    ->required(),
                ]),
                    FileUpload::make('image')
                    ->openable()
                    ->imageEditor()
                    ->deletable(true),
                    MarkdownEditor::make('notes')
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account.full_name')
                    ->sortable()
                    ->searchable(),
                ImageColumn::make('image')
                    ->square(),
                Tables\Columns\TextColumn::make('make')
                    ->searchable(),
                Tables\Columns\TextColumn::make('model')
                    ->searchable(),
                Tables\Columns\TextColumn::make('year')
                    ->sortable(),
                Tables\Columns\TextColumn::make('license_plate')
                    ->searchable(),
                Tables\Columns\TextColumn::make('color')
                    ->searchable(),
                Tables\Columns\TextColumn::make('chassis_no')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('fuel_type')
                    ->searchable(),
                    Tables\Columns\TextColumn::make('miles_per_gallon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('transmission')
                    ->searchable(),
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
                Tables\Actions\ActionGroup::make([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
]),
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
            'index' => Pages\ListVehicles::route('/'),
            'create' => Pages\CreateVehicle::route('/create'),
            'view' => Pages\ViewVehicle::route('/{record}'),
            'edit' => Pages\EditVehicle::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        $query = parent::getEloquentQuery();

        if ($user->isAdmin() || $user->isStaff()) {
            // Admin or staff can see all records
            return $query;
        } else {
            // Other users can only see their own records
            return $query->where('account_id', $user->account->id);
        }
    }




}
