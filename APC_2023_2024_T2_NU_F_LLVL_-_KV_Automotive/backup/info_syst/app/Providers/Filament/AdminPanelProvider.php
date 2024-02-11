<?php

namespace App\Providers\Filament;

use App\Filament\Resources\InvoiceResource\Widgets\TotalRevenue;
use App\Filament\Resources\JobOrderResource\Widgets\JobOrderWidget;
use App\Filament\Resources\UserResource\Widgets\UserStatWidget;
use App\Filament\Resources\VehicleResource\Widgets\VehicleType;
use App\Filament\Resources\InventoryResource\Widgets\TotalInventory;
use App\Filament\Resources\InventoryResource\Widgets\Totalsales;
use App\Models\User;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Filament\Forms\Components\FileUpload;
use Jeffgreco13\FilamentBreezy\Pages\TwoFactorPage;
use Filament\Enums\ThemeMode;


class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
           // ->brandName('LLBL & KV')
            ->path('admin')
            ->plugin(
                BreezyCore::make()
                ->myProfile(
                    shouldRegisterUserMenu: true, // Sets the 'account' link in the panel User Menu (default = true)
                    shouldRegisterNavigation: false, // Adds a main navigation item for the My Profile page (default = false)
                    navigationGroup: 'Account Management', // Sets the navigation group for the My Profile page (default = null)
                    hasAvatars: false, // Enables the avatar upload form component (default = false)
                    slug: 'my-profile' // Sets the slug for the profile page (default = 'my-profile')
                )
                ->enableTwoFactorAuthentication(
                    force: false, // force the user to enable 2FA before they can use the application (default = false)
                )
            )
            ->plugins([
                \BezhanSalleh\FilamentShield\FilamentShieldPlugin::make()
            ])
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Stone,
                'info' => Color::Blue,
                'primary' => Color::Yellow,
                'success' => Color::Emerald,
                'warning' => Color::Orange,
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->databaseNotifications()
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                UserStatWidget::class,
                TotalInventory::class,
                VehicleType::class,
                TotalRevenue::class,
                TotalRevenue::class,
                Totalsales::class,
                JobOrderWidget::class,
                //Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }



}
