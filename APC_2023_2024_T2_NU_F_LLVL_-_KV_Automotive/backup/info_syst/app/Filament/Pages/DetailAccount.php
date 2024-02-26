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
use BezhanSalleh\FilamentShield\Traits\HasPageShield;

class DetailAccount extends Page implements HasForms
{

    use HasPageShield;
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
                ->hidden()
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
                                 ->datalist([
                    'AF', 'AX', 'AL', 'DZ', 'AS', 'AD', 'AO', 'AI', 'AQ', 'AG', 'AR', 'AM', 'AW', 'AU', 'AT', 'AZ', 'BS', 'BH', 'BD', 'BB',
                     'BY', 'BE', 'BZ', 'BJ', 'BM', 'BT', 'BO', 'BA', 'BW', 'BV', 'BR', 'IO', 'BN', 'BG', 'BF', 'BI', 'KH', 'CM', 'CA', 'CV', 'KY',
                     'CF', 'TD', 'CL', 'CN', 'CX', 'CC', 'CO', 'KM', 'CG', 'CD', 'CK', 'CR', 'CI', 'HR', 'CU', 'CY', 'CZ', 'DK', 'DJ', 'DM', 'DO',
                     'EC', 'EG', 'SV', 'GQ', 'ER', 'EE', 'ET', 'FK', 'FO', 'FJ', 'FI', 'FR', 'GF', 'PF', 'TF', 'GA', 'GM', 'GE', 'DE', 'GH', 'GI',
                     'GR', 'GL', 'GD', 'GP', 'GU', 'GT', 'GG', 'GN', 'GW', 'GY', 'HT', 'HM', 'VA', 'HN', 'HK', 'HU', 'IS', 'IN', 'ID', 'IR', 'IQ',
                     'IE', 'IM',  'IL', 'IT', 'JM', 'JP', 'JE', 'JO', 'KZ', 'KE', 'KI', 'KR', 'KW', 'KG', 'LA', 'LV', 'LB', 'LS', 'LR', 'LY', 'LI',
                     'LT', 'LU', 'MO', 'MK', 'MG', 'MW', 'MY', 'MV', 'ML', 'MT', 'MH', 'MQ', 'MR', 'MU', 'YT', 'MX', 'FM', 'MD', 'MC', 'MN', 'ME',
                     'MS', 'MA', 'MZ', 'MM', 'NA', 'NR', 'NP', 'NL', 'AN', 'NC', 'NZ', 'NI', 'NE', 'NG', 'NU', 'NF', 'MP', 'NO', 'OM', 'PK', 'PW',
                     'PS', 'PA', 'PG', 'PY', 'PE', 'PH', 'PN', 'PL', 'PT', 'PR', 'QA', 'RE', 'RO', 'RU', 'RW', 'BL', 'SH', 'KN', 'LC', 'MF', 'PM',
                     'VC', 'WS', 'SM', 'ST', 'SA', 'SN', 'RS', 'SC', 'SL', 'SG', 'SK', 'SI', 'SB', 'SO', 'ZA', 'GS', 'ES', 'LK', 'SD', 'SR', 'SJ',
                     'SZ', 'SE', 'CH', 'SY', 'TW', 'TJ', 'TZ', 'TH', 'TL', 'TG', 'TK', 'TO', 'TT', 'TN', 'TR', 'TM', 'TC', 'TV', 'UG', 'UA', 'AE',
                     'GB', 'US', 'UM', 'UY', 'UZ', 'VU', 'VE', 'VN', 'VG', 'VI', 'WF', 'EH', 'YE', 'ZM', 'ZW'
                      ])
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

                $newAccount = $user->accounts()->create($accountData);

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
