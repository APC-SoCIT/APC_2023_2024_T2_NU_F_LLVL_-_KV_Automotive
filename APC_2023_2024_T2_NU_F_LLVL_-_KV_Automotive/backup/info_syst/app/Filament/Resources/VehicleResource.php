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
use Filament\Tables\Filters\Filter;

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
                Section::make()
                ->icon('heroicon-m-information-circle')
             ->description('Please fill out the form cointaining the full detail of the vehicle')
            ->schema([
                Section::make('Owner')
                ->description('Details of the vehicle Owner')
                ->icon('heroicon-m-user-circle')
                ->schema([

                    Forms\Components\Select::make('account_id')
                    ->relationship(name: 'account', titleAttribute: 'full_name')
                    ->placeholder('Ex. Glenn Aldrich Buenavente')
                    ->native(false)
                    ->required()
                    ->searchPrompt('Search Account by their name (ex. jose)')
                    ->noSearchResultsMessage('No Customer found.')
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
                    ->placeholder('Ex. Honda')
                    ->required()
                    ->alpha()
                    ->datalist([
                        "Abarth",
                        "Alfa Romeo",
                        "Aston Martin",
                        "Audi",
                        "Bentley",
                        "BMW",
                        "Bugatti",
                        "Cadillac",
                        "Chevrolet",
                        "Chrysler",
                        "Citroën",
                        "Dacia",
                        "Daewoo",
                        "Daihatsu",
                        "Dodge",
                        "Donkervoort",
                        "DS",
                        "Ferrari",
                        "Fiat",
                        "Fisker",
                        "Ford",
                        "Honda",
                        "Hummer",
                        "Hyundai",
                        "Infiniti",
                        "Iveco",
                        "Jaguar",
                        "Jeep",
                        "Kia",
                        "KTM",
                        "Lada",
                        "Lamborghini",
                        "Lancia",
                        "Land Rover",
                        "Landwind",
                        "Lexus",
                        "Lotus",
                        "Maserati",
                        "Maybach",
                        "Mazda",
                        "McLaren",
                        "Mercedes-Benz",
                        "MG",
                        "Mini",
                        "Mitsubishi",
                        "Morgan",
                        "Nissan",
                        "Opel",
                        "Peugeot",
                        "Porsche",
                        "Renault",
                        "Rolls-Royce",
                        "Rover",
                        "Saab",
                        "Seat",
                        "Skoda",
                        "Smart",
                        "SsangYong",
                        "Subaru",
                        "Suzuki",
                        "Tesla",
                        "Toyota",
                        "Volkswagen",
                        "Volvo"
                      ])
                    ->maxLength(255),
                Forms\Components\TextInput::make('model')
                    ->required()
                    ->placeholder('Ex. Civic')
                    ->alpha()
                    ->maxLength(255),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->placeholder('Ex. 2002')
                    ->numeric(),
                ])->columns(2),
                Section::make('Vehicle')
                ->icon('heroicon-m-truck')
                ->description('Full Details of the Owners Vehicle')
                ->schema([
                Forms\Components\TextInput::make('license_plate')
                    ->unique(ignoreRecord: true)
                    ->placeholder('Ex. NBC 1234')
                    ->maxLength(255),
                Forms\Components\TextInput::make('color')
                    ->placeholder('Ex. White')
                    ->maxLength(255),
                Forms\Components\TextInput::make('chassis_no')
                     ->placeholder('Ex. ABCDEFGHIJ1234567')
                     ->unique(ignoreRecord: true)
                    ->maxLength(255),
                 Forms\Components\TextInput::make('engine_no')
                    ->unique(ignoreRecord: true)
                    ->placeholder('Ex.52WVC10338')
                   ->maxLength(255),
                    Forms\Components\Select::make('fuel_type')
                    ->options([
                        'Unleaded' => 'Unleaded',
                        'Diesel' => 'Diesel',
                    ])
                    ->native(false)
                    ->placeholder('Ex. Unleaded')
                    ->required(),
                    Forms\Components\TextInput::make('miles_per_gallon')
                    ->label('Kilometer Per Liter')
                    ->placeholder('26')
                    ->numeric(),
                Forms\Components\Select::make('transmission')
                    ->options([
                        'Manual' => 'Manual',
                        'Automatic' => 'Automatic',
                    ])
                    ->native(false)
                    ->placeholder('Ex. Manual')
                    ->required(),
                ])->columns(2),
                    FileUpload::make('image')
                    ->openable()
                    ->imageEditor()
                    ->deletable(true),
                    MarkdownEditor::make('notes')
                    ->placeholder('Ex. The Speedometer is not working ')
            ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account.full_name')
                    ->label('Customer')
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
                    ->searchable()
                    ->toggleable(isToggledHiddenByDefault: true),
                  Tables\Columns\TextColumn::make('engine_no')
                      ->searchable()
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
