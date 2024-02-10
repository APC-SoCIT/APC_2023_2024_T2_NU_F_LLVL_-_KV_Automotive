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
use Filament\Forms\Components\Section;

class DetailAccount extends Page implements HasForms
{

    public ?array $data = [];
    protected static ?string $navigationIcon = 'heroicon-o-document-text';

    protected static ?string $navigationGroup = 'Account Management';
    protected static string $view = 'filament.pages.detail-account';

    protected static ?string $title = 'Customer Profile';

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
            Section::make()
            ->icon('heroicon-m-user-circle')
         ->description('Please Fill out the form so that we can assess your vehicle')
        ->schema([

             Section::make('Name')
            ->description('Ex. Glenn Aldrich Buenavente')
            ->icon('heroicon-m-shopping-bag')
           ->schema([
           TextInput::make('first_name')
                 ->placeholder('Ex. Glenn')
                 ->alpha()
                ->required()
                ->maxLength(255),
            TextInput::make('middle_name')
                 ->placeholder('Ex. Luna')
                 ->alpha()
                ->maxLength(255),
          TextInput::make('last_name')
                  ->placeholder('Ex. Buenavente')
                  ->required()
                ->maxLength(255),
            ])->columns(2),

            Section::make('Account')
            ->description('Please put your credententials dont worry we will only use it to email you')
            ->icon('heroicon-m-code-bracket')
           ->schema([
            TextInput::make('email')
                ->unique(ignoreRecord: true)
                ->email()
                ->required()
                ->placeholder('Ex. gelnn@gmail.com')
                ->maxLength(255),
            TextInput::make('password')
                ->required()
                ->maxLength(255),
           ])->columns(3),
           Section::make('Address')
           ->description('Ex. 5 Lilac st, nangka, marikina city')
           ->icon('heroicon-m-cake')
          ->schema([
            DatePicker::make('birthdate')
                ->suffixIcon('heroicon-m-calendar-days')
                ->placeholder('mm/dd/yy')
                ->native(false)
              ->required(),
            TextInput::make('phone_number')
                ->placeholder('Ex. 0905526228')
                ->unique()
                ->numeric()
                ->maxLength(255),
           TextInput::make('address')
                ->placeholder('Ex. 5  Brgy Calumpit Linghos,')
                 ->required()
                ->maxLength(255),
          TextInput::make('city')
                 ->regex('/^[a-zA-Z\s]+$/')
                ->placeholder('Bulacan')
                ->required()
                ->maxLength(255),
           TextInput::make('country')
                ->alpha()
                ->required()
                ->placeholder('PH')
                ->maxLength(255),
                  ])->columns(2),
             ]),
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
