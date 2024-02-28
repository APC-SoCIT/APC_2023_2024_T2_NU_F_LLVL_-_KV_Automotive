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
use Filament\Forms\Components\MarkdownEditor;
use Filament\Tables\Columns\Layout\Split;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\RepeatableEntry;
use App\Models\Vehicle;




class VehicleHistoryResource extends Resource
{
    protected static ?string $model = VehicleHistory::class;


    protected static ?string $navigationIcon = 'heroicon-o-folder';
    protected static ?string $navigationGroup = 'Information Management';
    protected static ?int $navigationSort = 3;
    protected static ?string $slug = 'Vehicle_history';
    protected static ?string $pluralModelLabel = 'Vehicle History';


    public static function form(Form $form): Form
    {



        return $form
            ->schema([
                Section::make()
                ->icon('heroicon-m-information-circle')
             ->description('Please Fill out the form for vehicle history')
            ->schema([
                Section::make('Vehicle Details')
                ->icon('heroicon-m-identification')
             ->description('Please Fill out the form once the job status is created only the status can be changed')
            ->schema([
                Forms\Components\Select::make('account_id')
                    ->relationship(name: 'account', titleAttribute: 'full_name')
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->searchPrompt('Search Account by their name (ex. jose)')
                    ->noSearchResultsMessage('No Customer found.')
                    ->placeholder('Ex. Glenn Aldrich Buenavente')
                    ->required(),

                    Forms\Components\Select::make('vehicle_id')
                    ->label('Vehicle')
                    ->relationship('vehicle', 'make_and_model', function ($get, $query) {
                        if ($get('account_id')) {
                            $query->where('account_id', $get('account_id'));
                        }
                    })
                    ->searchable()
                    ->preload()
                    ->native(false)
                    ->disabledOn('edit')
                    ->searchPrompt('Search Vehicle by make and model (e.g., Honda Civic)')
                    ->noSearchResultsMessage('No Vehicle found.')
                    ->placeholder('Ex. Honda Civic')
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
                    ->searchPrompt('Search Vehicle by their year (ex.2002,2004)')
                    ->noSearchResultsMessage('No year found.')
                    ->placeholder('Ex. 2002')
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
                    ->searchPrompt('Search Vehicle by their color (ex.beige,white)')
                    ->noSearchResultsMessage('No color found.')
                    ->placeholder('Ex. white')
                    ->required(),

                Forms\Components\Select::make('vehicle_chassis_no')
                ->label('Chassis Number')
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
                    ->searchPrompt('Search Vehicle by their Chassis Number')
                    ->noSearchResultsMessage('No Chassis Number found.')
                    ->placeholder('Ex. ABCDEFGHIJ1234567')
                    ->required(),

                    Forms\Components\Select::make('vehicle_engine_no')
                    ->label('Engine Number')
                    ->relationship('vehicle', 'engine_no', function ($get, $query) {
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
                        ->searchPrompt('Search Vehicle by their Engine Number')
                        ->noSearchResultsMessage('No Engine Number found.')
                        ->placeholder('Ex. 52WVC10338')
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
                    ->searchPrompt('Search Vehicle by their License plate')
                    ->noSearchResultsMessage('No License plate found.')
                    ->placeholder('Ex. NBC 1234')
                    ->required(),

                    Forms\Components\TextInput::make('performed_by')
                    ->label('Validated by:')
                    ->placeholder('Glenn Aldrich Buenavente')
                    ->regex('/^[a-zA-Z\s-]+$/')
                    ->required()
                    ->disabledOn('edit')
                    ->maxLength(255),

            ]),
                Section::make('Maintenance Log')
                 ->description('Maintain a detailed log of service activities for your vehicles.')
                 ->schema([
                    Forms\Components\Repeater::make('task_performed')
                    ->schema([
                        Forms\Components\TextInput::make('task')
                            ->label('Task')
                            ->placeholder('Change Oil')
                            ->required()
                            ->regex('/^[a-zA-Z\s]+$/')
                            ->maxLength(255),
                            Forms\Components\TextInput::make('Part_Used')
                            ->label('Part Used')
                            ->placeholder('Petron Engine Oil')
                            ->regex('/^[a-zA-Z\s]+$/')
                            ->maxLength(255),
                            Forms\Components\TextInput::make('mileage')
                            ->required()
                            ->placeholder('30,0000')
                            ->label('Mileage')
                            ->numeric(),
                        Forms\Components\DatePicker::make('date_performed')
                        ->placeholder('mm/dd/yy')
                            ->required()
                            ->suffixIcon('heroicon-m-calendar-days')
                            ->native(false)
                              ->required()
                            ->format('Y/m/d'),
                            Forms\Components\TextInput::make('performed_by')
                            ->placeholder('Glenn Aldrich Buenavente')
                            ->regex('/^[a-zA-Z\s-]+$/')
                            ->required()
                            ->maxLength(255),
                    ])
                    ->reorderableWithButtons()
                    ->columns(2),
                    ]),
                    MarkdownEditor::make('notes')
                    ->placeholder('Come back for change oil'),
                ]),
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
                    Tables\Columns\TextColumn::make('vehicle.make_and_model')
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
                ),
                Tables\Actions\Action::make('View')
                ->icon('heroicon-o-eye')
                ->color('warning')
                ->modalHeading('Vehicle Information')
                ->modalSubmitAction(false)
                ->modalCancelActionLabel('Close')
                ->modalCancelAction(false)
                // This is the important part!
                ->infolist([
                    // Inside, we can treat this as any info list and add all the fields we want!
                    \Filament\Infolists\Components\Section::make('Vehicle Details')
                    ->icon('heroicon-m-truck')
                    ->schema([
                        TextEntry::make('account.full_name')
                           ->label('Customer'),
                        TextEntry::make('vehicle.make')
                        ->label('make'),
                        TextEntry::make('vehicle.model')
                        ->label('model'),
                        TextEntry::make('vehicle.year')
                        ->label('year'),
                        TextEntry::make('vehicle.license_plate')
                        ->label('license plate'),
                        TextEntry::make('vehicle.color')
                        ->label('color'),
                        TextEntry::make('vehicle.chassis_no')
                        ->label('chassis no.'),
                        TextEntry::make('vehicle.engine_no')
                        ->label('engine no.'),
                        TextEntry::make('performed_by')
                        ->label('performed by:'),
                        TextEntry::make('notes')
                        ->label('notes'),
                       ])
                        ->columns(2),
                        RepeatableEntry::make('task_performed')
                        ->schema([
                            TextEntry::make('task'),
                            TextEntry::make('Part_Used'),
                            TextEntry::make('mileage'),
                            TextEntry::make('date_performed'),
                            // Add more fields within the repeater if needed

                        ])
                ])->slideOver(),
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

    public static function getEloquentQuery(): Builder
    {
        $user = auth()->user();

        $query = parent::getEloquentQuery();

        if ($user->isAdmin() || $user->isStaff()) {
            // Admin or staff can see all records
            return $query;
        } else {
            // Other users can only see their own records based on their account_id
            return $query->whereHas('account', function ($accountQuery) use ($user) {
                $accountQuery->where('user_id', $user->id);
            });
        }
    }

}
