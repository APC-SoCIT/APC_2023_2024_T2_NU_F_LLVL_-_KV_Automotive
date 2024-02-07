<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatWidget extends BaseWidget
{
    protected int | string | array $columnSpan = [
        'md' => 2,
        'xl' => 3,
    ];

    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
                ->description('Total number of users')
                ->color('success')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->Icon('heroicon-m-user'),

            Stat::make('Admin', User::where('role', User::ROLE_ADMIN)->count())
                ->description('Number of admin users')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger')
                ->Icon('heroicon-m-shield-check'),

            Stat::make('Staffs', User::where('role', User::ROLE_STAFF)->count())
                ->description('Number of staff users')
                ->color('info')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->Icon('heroicon-m-users'),
        ];
    }
}
