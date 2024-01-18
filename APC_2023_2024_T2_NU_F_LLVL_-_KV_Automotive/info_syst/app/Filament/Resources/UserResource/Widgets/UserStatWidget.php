<?php

namespace App\Filament\Resources\UserResource\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserStatWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count()),
            Stat::make('Admin', User::where('role',User::ROLE_ADMIN)->count()),
            Stat::make('Staffs', User::where('role',User::ROLE_STAFF)->count()),
        ];
    }

        public static function canView(): bool
    {
        return auth()->user()->isAdmin() || auth()->user()->isStaff();

    }
}
