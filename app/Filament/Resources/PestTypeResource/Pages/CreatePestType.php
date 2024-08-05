<?php

namespace App\Filament\Resources\PestTypeResource\Pages;

use App\Filament\Resources\PestTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePestType extends CreateRecord
{
    protected static string $resource = PestTypeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
