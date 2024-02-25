<?php

namespace App\Filament\Resources;

use App\Filament\Resources\InvoiceResource\Pages;
use App\Filament\Resources\InvoiceResource\RelationManagers;
use App\Models\Invoice;
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
use Filament\Infolists;
use Filament\Infolists\Infolist;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;


class InvoiceResource extends Resource
{
    protected static ?string $model = Invoice::class;
    protected static ?string $navigationIcon = 'heroicon-o-newspaper';
    protected static ?string $navigationGroup = 'Information Management';
    protected static ?int $navigationSort = 4;
    protected static ?string $slug = 'Invoice';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Invoice')
                ->icon('heroicon-m-banknotes')
                ->description('Please fill up the form ans upload the invoice image')
                ->schema([

                Forms\Components\Select::make('account_id')
                    ->relationship(name: 'account', titleAttribute: 'full_name')
                    ->native(false)
                    ->searchPrompt('Search Account by their name (ex. jose)')
                    ->noSearchResultsMessage('No Customer found.')
                    ->placeholder('Ex. Bose Manalo')
                    ->preload()
                    ->required(),
                Forms\Components\TextInput::make('created_by')
                    ->required()
                    ->placeholder('Ex. Glenn Aldrich Buenavente')
                    ->maxLength(255),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric()
                    ->placeholder('Ex. 1000')
                    ->prefix('₱'),
                Forms\Components\TextInput::make('invoice_no')
                 ->placeholder('Ex. 56')
                    ->required()
                    ->numeric()
                    ->unique(ignoreRecord: true),
                    FileUpload::make('image')
                    ->openable()
                    ->imageEditor()
                    ->deletable(true),
                    MarkdownEditor::make('notes')
                    ->placeholder('Ex. Payed Via Cash')
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('account.full_name')
                ->label('Customer')
                ->searchable()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image')
                    ->square(),
                Tables\Columns\TextColumn::make('created_by')
                    ->searchable(),
                Tables\Columns\TextColumn::make('amount')
                    ->searchable()
                    ->money('PHP')
                    ->sortable(),
                Tables\Columns\TextColumn::make('invoice_no')
                    ->searchable()
                    ->numeric()
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
                         TextEntry::make('amount')
                         ->prefix('₱'),
                         TextEntry::make('invoice_no'),
                        ])
                        ->columns(2),
                        ImageEntry::make('image')
                        ->width(700)
                        ->height(500),
                        TextEntry::make('notes'),
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
            'index' => Pages\ListInvoices::route('/'),
            'create' => Pages\CreateInvoice::route('/create'),
            'view' => Pages\ViewInvoice::route('/{record}'),
            'edit' => Pages\EditInvoice::route('/{record}/edit'),
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
