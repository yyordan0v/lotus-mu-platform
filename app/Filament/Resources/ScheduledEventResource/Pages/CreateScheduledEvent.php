<?php

namespace App\Filament\Resources\ScheduledEventResource\Pages;

use App\Filament\Resources\ScheduledEventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateScheduledEvent extends CreateRecord
{
    protected static string $resource = ScheduledEventResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
