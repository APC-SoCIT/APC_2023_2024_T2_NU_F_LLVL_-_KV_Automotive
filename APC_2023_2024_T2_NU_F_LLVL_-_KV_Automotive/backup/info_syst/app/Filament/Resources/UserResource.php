<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
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


class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Account Management';
        protected static ?string $pluralModelLabel = 'Account';


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Create User')
    ->description('Kindly fill up the forms below')
    ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('email')
                    ->unique(ignoreRecord: true)
                    ->email()
                    ->required()
                    ->maxLength(255),
                    Forms\Components\Select::make('role')
                    ->required()
                    ->options(User::ROLES)
                    ->visible(auth()->user()->isAdmin())
                    ->native(false)
                    ->default('USER'),
                    Forms\Components\Select::make('roles')
                    ->relationship('roles', 'name')
                    ->multiple()
                    ->preload()
                    ->searchable(),
                    ])


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                   ->sortable()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                  ->sortable()
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('roles.name')
                    ->label('Permission')
                    ->visible(auth()->user()->isAdmin())
                    ->badge()
                    ->searchable(),
                    Tables\Columns\TextColumn::make('role')
                      ->label('Access')
                    ->visible(auth()->user()->isAdmin())
                    ->sortable()
                    ->badge()
                    ->color(function(string $state) : string{
                          return match($state) {
                            'ADMIN' => 'danger',
                            'STAFF' => 'info',
                            'USER' => 'success',
                          };
                    })
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\Action::make('View')
                ->icon('heroicon-o-eye')
                ->color('warning')
                ->modalHeading('Account Information')
                ->modalSubmitAction(false)
                ->modalCancelAction(false)
                // This is the important part!
                ->infolist([
                    // Inside, we can treat this as any info list and add all the fields we want!
                    \Filament\Infolists\Components\Section::make('Account Details')
                    ->icon('heroicon-m-user-circle')
                        ->schema([
                           TextEntry::make('name'),
                            TextEntry::make('email'),
                            TextEntry::make('roles.name')
                            ->badge()
                            ->label('Permission'),
                            TextEntry::make('role')
                            ->badge()
                            ->label('Access')
                            ->color(function(string $state) : string{
                                return match($state) {
                                  'ADMIN' => 'danger',
                                  'STAFF' => 'info',
                                  'USER' => 'success',
                                };
                          }),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
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
