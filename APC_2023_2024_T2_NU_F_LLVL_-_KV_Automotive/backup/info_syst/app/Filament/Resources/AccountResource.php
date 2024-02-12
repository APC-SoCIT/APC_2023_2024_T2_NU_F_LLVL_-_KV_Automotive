<?php

namespace App\Filament\Resources;

use App\Filament\Resources\AccountResource\Pages;
use App\Filament\Resources\AccountResource\RelationManagers;
use App\Models\Account;
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


class AccountResource extends Resource
{
    protected static ?string $model = Account::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $navigationGroup = 'Account Management';
    protected static ?string $slug = 'Customer';

    protected static ?string $pluralModelLabel = 'Customer';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make()
                ->icon('heroicon-m-user-circle')
             ->description('Please Fill out the form so that we can assess your vehicle')
            ->schema([

                 Section::make('Name')
                ->description('Ex. Glenn Aldrich Buenavente')
                ->icon('heroicon-m-shopping-bag')
               ->schema([
                Forms\Components\TextInput::make('first_name')
                     ->placeholder('Ex. Glenn')
                     ->alpha()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('middle_name')
                     ->placeholder('Ex. Luna')
                     ->alpha()
                    ->maxLength(255),
                Forms\Components\TextInput::make('last_name')
                      ->placeholder('Ex. Buenavente')
                     ->alpha()
                    ->maxLength(255),
                ])->columns(2),

                Section::make('Account')
                ->description('Please put your credententials dont worry will only use it to email you')
                ->icon('heroicon-m-code-bracket')
               ->schema([
                Forms\Components\TextInput::make('email')
                    ->unique(ignoreRecord: true)
                    ->email()
                    ->required()
                    ->placeholder('Ex. gelnn@gmail.com')
                    ->maxLength(255),
                Forms\Components\TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
               ])->columns(3),
               Section::make('Address')
               ->description('Ex. 5 Lilac st, nangka, marikina city')
               ->icon('heroicon-m-cake')
              ->schema([
                Forms\Components\DatePicker::make('birthdate')
                    ->suffixIcon('heroicon-m-calendar-days')
                    ->placeholder('mm/dd/yy')
                    ->native(false)
                  ->required(),
                Forms\Components\TextInput::make('phone_number')
                ->placeholder('Ex. 0905526228')
                    ->numeric()
                    ->maxLength(255),
                Forms\Components\TextInput::make('address')
                    ->placeholder('Ex. 5  Brgy Calumpit Linghos,')
                     ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                     ->regex('/^[a-zA-Z\s]+$/')
                    ->placeholder('Bulacan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('country')
                    ->alpha()
                    ->required()
                    ->placeholder('PH')
                    ->maxLength(255),
                      ])->columns(2),
                      Forms\Components\Select::make('user_id')
                      ->relationship(name: 'user', titleAttribute: 'name')
                      ->searchable()
                      ->preload()
                      ->native(false)
                      ->searchPrompt('Search Account by their name (ex. jose)')
                      ->noSearchResultsMessage('No Account found.')
                      ->placeholder('Ex.Glenn Aldrich Buenavente')
                      ->required()
                      ->visible(function (Account $record): bool {
                        $user = auth()->user();
                        return $user->isAdmin();
                    }),// if not admin, hide the field,
                 ]),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('full_name')
                    ->sortable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('birthdate')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('phone_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('address')
                ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                ->toggleable(isToggledHiddenByDefault: true)
                    ->searchable(),
                Tables\Columns\TextColumn::make('country')
                ->toggleable(isToggledHiddenByDefault: true)
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
                Tables\Actions\Action::make('View')
                ->icon('heroicon-o-eye')
                ->color('warning')
                ->modalHeading('Customer Information')
                ->modalSubmitAction(false)
                ->modalCancelAction(false)
                // This is the important part!
                ->infolist([
                    // Inside, we can treat this as any info list and add all the fields we want!
                    \Filament\Infolists\Components\Section::make('Customer Details')
                    ->icon('heroicon-m-user-circle')
                        ->schema([
                            TextEntry::make('full_name'),
                            TextEntry::make('email'),
                            TextEntry::make('birthdate')
                            ->date(),
                            TextEntry::make('phone_number'),
                            TextEntry::make('address'),
                            TextEntry::make('city'),
                            TextEntry::make('country'),
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

    public static function getRelations(): array
    {
        return [
            //
        ];
    }



    public static function getPages(): array
    {
        return [
            'index' => Pages\ListAccounts::route('/'),
            'create' => Pages\CreateAccount::route('/create'),
            'view' => Pages\ViewAccount::route('/{record}'),
            'edit' => Pages\EditAccount::route('/{record}/edit'),
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
            // Other users can only see their own records based on their user ID
            return $query->where('user_id', $user->id);
        }
    }

}
