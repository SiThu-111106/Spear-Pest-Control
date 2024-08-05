<?php

namespace App\Filament\Resources\PestTypeResource\Pages;

use App\Filament\Resources\PestTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPestType extends EditRecord
{
    protected static string $resource = PestTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
