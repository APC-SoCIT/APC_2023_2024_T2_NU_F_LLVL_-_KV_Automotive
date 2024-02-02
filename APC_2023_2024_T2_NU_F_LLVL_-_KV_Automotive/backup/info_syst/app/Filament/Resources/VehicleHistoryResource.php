<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VehicleHistoryResource\Pages;
use App\Filament\Resources\VehicleHistoryResource\RelationManagers;
use App\Models\VehicleHistory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Blade;
use Filament\Forms\Components\Section;


class VehicleHistoryResource extends Resource
{
    protected static ?string $model = VehicleHistory::class;


    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';
    protected static ?string $navigationGroup = 'Information Management';
    protected static ?int $navigationSort = 5;
    protected static ?string $slug = 'Vehicle_history';
    protected static ?string $pluralModelLabel = 'Vehicle History';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('account_id')
                    ->relationship(name: 'account', titleAttribute: 'full_name')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_id')
                ->label('make')
                    ->relationship('vehicle', 'make', function ($get, $query) {
                        if ($get('account_id')) {
                            $query->where('account_id', $get('account_id'));
                        }
                    })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_model')
                ->label('model')
                ->relationship('vehicle', 'model', function ($get, $query) {
                    if ($get('account_id') && $get('vehicle_id')) {
                        $query->where('account_id', $get('account_id'))
                              ->where('id', $get('vehicle_id'));
                    } elseif ($get('account_id')) {
                        $query->where('account_id', $get('account_id'));
                    } elseif ($get('vehicle_id')) {
                        $query->where('id', $get('vehicle_id'));
                    }
                })

                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_year')
                ->label('year')
                ->relationship('vehicle', 'year', function ($get, $query) {
                    if ($get('account_id') && $get('vehicle_id')) {
                        $query->where('account_id', $get('account_id'))
                              ->where('id', $get('vehicle_id'));
                    } elseif ($get('account_id')) {
                        $query->where('account_id', $get('account_id'));
                    } elseif ($get('vehicle_id')) {
                        $query->where('id', $get('vehicle_id'));
                    }
                })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_color')
                ->label('color')
                ->relationship('vehicle', 'color', function ($get, $query) {
                    if ($get('account_id') && $get('vehicle_id')) {
                        $query->where('account_id', $get('account_id'))
                              ->where('id', $get('vehicle_id'));
                    } elseif ($get('account_id')) {
                        $query->where('account_id', $get('account_id'));
                    } elseif ($get('vehicle_id')) {
                        $query->where('id', $get('vehicle_id'));
                    }
                })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_chassis_no')
                ->label('chassis no')
                ->relationship('vehicle', 'chassis_no', function ($get, $query) {
                    if ($get('account_id') && $get('vehicle_id')) {
                        $query->where('account_id', $get('account_id'))
                              ->where('id', $get('vehicle_id'));
                    } elseif ($get('account_id')) {
                        $query->where('account_id', $get('account_id'));
                    } elseif ($get('vehicle_id')) {
                        $query->where('id', $get('vehicle_id'));
                    }
                })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),

                Forms\Components\Select::make('vehicle_license_plate')
                ->label('license plate')
                ->relationship('vehicle', 'license_plate', function ($get, $query) {
                    if ($get('account_id') && $get('vehicle_id')) {
                        $query->where('account_id', $get('account_id'))
                              ->where('id', $get('vehicle_id'));
                    } elseif ($get('account_id')) {
                        $query->where('account_id', $get('account_id'));
                    } elseif ($get('vehicle_id')) {
                        $query->where('id', $get('vehicle_id'));
                    }
                })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->required(),


                Forms\Components\TextInput::make('performed_by')
                ->required()
                ->maxLength(255),
                Section::make('Maintenance Log')
                 ->description('Maintain a detailed log of service activities for your vehicles.')
                 ->schema([
                    Forms\Components\Repeater::make('task_performed')
                    ->schema([
                        Forms\Components\TextInput::make('task')
                            ->label('Task')
                            ->required()
                            ->maxLength(255),
                            Forms\Components\TextInput::make('mileage')
                            ->label('Mileage')
                            ->numeric(),
                        Forms\Components\DatePicker::make('date_performed')
                            ->required()
                            ->native(false)
                            ->format('Y/m/d'),
                        // Add more fields within the repeater if needed

                    ])
                    ->reorderableWithButtons()
                    ->columns(2),
                    ])
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account.full_name')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('vehicle.model')
                    ->label('model')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('vehicle.license_plate')
                    ->label('license_plate')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('performed_by')
                    ->label('performed_by')
                    ->sortable()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('first_task')
                    ->label('Task Record')
                    ->sortable()
                    ->searchable(),

                    Tables\Columns\TextColumn::make('created_at')
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
                Tables\Actions\Action::make('download') // Change 'pdf' to 'download'
                ->label('PDF')
                ->color('success')
                ->icon('heroicon-o-arrow-down-tray')
                ->url(
                    fn (VehicleHistory $record): string => route('generate-pdf.vehicle.report', ['record' => $record]), // Update the route name
                    shouldOpenInNewTab: true
                )
            ])
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
            'index' => Pages\ListVehicleHistories::route('/'),
            'create' => Pages\CreateVehicleHistory::route('/create'),
            'edit' => Pages\EditVehicleHistory::route('/{record}/edit'),
        ];
    }
}
