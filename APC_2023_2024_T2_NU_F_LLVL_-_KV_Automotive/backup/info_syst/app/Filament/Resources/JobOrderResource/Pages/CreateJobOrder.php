<?php

namespace App\Filament\Resources\JobOrderResource\Pages;

use App\Filament\Resources\JobOrderResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateJobOrder extends CreateRecord
{
    protected static string $resource = JobOrderResource::class;
    protected static ?string $title = 'Job Status';

    protected function getRedirectUrl(): string
{
    return $this->getResource()::getUrl('index');
}
}
