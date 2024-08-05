<?php

namespace App\Filament\Resources\PestResource\Pages;

use App\Filament\Resources\PestResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePest extends CreateRecord
{
    protected static string $resource = PestResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
