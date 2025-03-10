<?php

namespace App\Filament\Resources\TownshipResource\Pages;

use App\Filament\Resources\TownshipResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTownship extends EditRecord
{
    protected static string $resource = TownshipResource::class;

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
