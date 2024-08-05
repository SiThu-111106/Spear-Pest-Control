<?php

namespace App\Filament\Resources\FrequencyResource\Pages;

use App\Filament\Resources\FrequencyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditFrequency extends EditRecord
{
    protected static string $resource = FrequencyResource::class;

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
