<?php

namespace App\Filament\Resources\FrequencyResource\Pages;

use App\Filament\Resources\FrequencyResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateFrequency extends CreateRecord
{
    protected static string $resource = FrequencyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
