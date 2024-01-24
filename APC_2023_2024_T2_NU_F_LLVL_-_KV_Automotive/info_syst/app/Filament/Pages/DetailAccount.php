<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Actions\Action;
use Filament\Support\Exceptions\Halt;
use Filament\Notifications\Notification;

class DetailAccount extends Page implements HasForms
{

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Account Management';
    protected static string $view = 'filament.pages.detail-account';

    public function mount(): void
    {
        $account = auth()->user()->account;

        if ($account) {
            $this->form->fill($account->attributesToArray());
        } else {
            // Handle the case where the user doesn't have an associated account
            // For example, you might want to set default values or leave the form empty.
            // Here, we set default values for demonstration purposes.
            $this->form->fill([
                'first_name' => '',
                'middle_name' => '',
                'last_name' => '',
                'email' => '',
                'password' => '',
                'birthdate' => null,
                'phone_number' => '',
                'address' => '',
                'city' => '',
                'country' => '',
            ]);
        }
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                    TextInput::make('first_name')
                    ->required()
                    ->maxLength(255),
                    TextInput::make('middle_name')
                    ->maxLength(255),
                    TextInput::make('last_name')
                    ->maxLength(255),
                    TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                    TextInput::make('password')
                    ->password()
                    ->required()
                    ->maxLength(255),
                    DatePicker::make('birthdate'),
                    TextInput::make('phone_number')
                    ->maxLength(255),
                    TextInput::make('address')
                    ->maxLength(255),
                        TextInput::make('city')
                    ->maxLength(255),
                    TextInput::make('country')
                    ->maxLength(255),
            ])
            ->statePath('data');
    }

    protected function getFormActions(): array
    {
        return [
            Action::make('save')
                ->label(__('filament-panels::resources/pages/edit-record.form.actions.save.label'))
                ->submit('save'),
        ];
    }

    public function save(): void
    {
        try {
            $data = $this->form->getState();
    
            $user = auth()->user();
    
            if ($user && $user->account) {
                $user->account->update($data);
            } else {
                // Handle the case where the user or account is null
                // For example, you might want to create a new account or show an error message.
                // Here, we'll create a new account for demonstration purposes.
                $accountData = [
                    'first_name' => $data['first_name'] ?? '',
                    'middle_name' => $data['middle_name'] ?? '',
                    'last_name' => $data['last_name'] ?? '',
                    'email' => $data['email'] ?? '',
                    'password' => $data['password'] ?? '',
                    'birthdate' => $data['birthdate'] ?? null,
                    'phone_number' => $data['phone_number'] ?? '',
                    'address' => $data['address'] ?? '',
                    'city' => $data['city'] ?? '',
                    'country' => $data['country'] ?? '',
                ];
    
                $newAccount = $user->account()->create($accountData);
    
                // If you need to associate the new account with the user, you can do it here.
                // $user->account()->associate($newAccount)->save();
            }
        } catch (Halt $exception) {
            return;
        }

        Notification::make()
        ->success()
        ->title(__('filament-panels::resources/pages/edit-record.notifications.saved.title'))
        ->send();

    }
}
