<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InventoryResource\Pages;
use App\Filament\Resources\InventoryResource\RelationManagers;
use App\Models\Inventory;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\Section;
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;



class InventoryResource extends Resource
{
    protected static ?string $model = Inventory::class;


    protected static ?string $navigationIcon = 'heroicon-o-arrow-down-on-square-stack';
    protected static ?string $navigationGroup = 'Inventory Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

                Section::make('Inventory')
                ->description('')
                ->icon('heroicon-m-shopping-cart')

            ->schema([


                Forms\Components\TextInput::make('product_name')
                    ->required()
                    ->placeholder('Ex. Prestone Coolant')
                    ->regex('/^[a-zA-Z\s]+$/')
                    ->maxLength(255),
                Forms\Components\Textarea::make('description')
                    ->placeholder('Ex.Prestone 50/50 Prediluted Coolant Blue - 1 Gallon')
                    ->maxLength(65535)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('quantity')
                    ->placeholder('Ex. 1000')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('price')
                    ->placeholder('Ex. 500')
                    ->required()
                    ->numeric()
                    ->prefix('₱'),
    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                Tables\Columns\TextColumn::make('product_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('quantity')
                    ->numeric()
                    ->sortable(),
                    Tables\Columns\TextColumn::make('description')
                    ->sortable(),
                Tables\Columns\TextColumn::make('price')
                    ->money('PHP')
                    ->sortable(),
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
                //Tables\Actions\ViewAction::make(),
                Tables\Actions\Action::make('View')
                ->icon('heroicon-o-eye')
                ->color('warning')
                ->modalHeading('Product Information')
                ->modalSubmitAction(false)
                ->modalCancelAction(false)
                // This is the important part!
                ->infolist([
                    // Inside, we can treat this as any info list and add all the fields we want!
                    \Filament\Infolists\Components\Section::make('Product Details')
                    ->icon('heroicon-m-shopping-cart')
                        ->schema([
                           TextEntry::make('product_name'),
                            TextEntry::make('description'),
                            TextEntry::make('quantity'),
                            TextEntry::make('price')
                            ->prefix('₱'),
                        ])
                        ->columns(2),
                ])->slideOver(),
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    // public static function infolist(Infolist $infolist): Infolist
    // {
    //     return $infolist
    //         ->schema([
    //             Infolists\Components\TextEntry::make('product_name'),
    //             Infolists\Components\TextEntry::make('description'),
    //             Infolists\Components\TextEntry::make('quantity'),
    //             Infolists\Components\TextEntry::make('price')
    //             ->icon('heroicon-m-banknotes')
    //                 ->columnSpanFull(),
    //         ]);
    // }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListInventories::route('/'),
            'create' => Pages\CreateInventory::route('/create'),
            'view' => Pages\ViewInventory::route('/{record}'),
            'edit' => Pages\EditInventory::route('/{record}/edit'),
        ];
    }
}
