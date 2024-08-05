<?php

namespace App\Filament\Resources\FrequencyResource\Pages;

use App\Filament\Resources\FrequencyResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewFrequency extends ViewRecord
{
    protected static string $resource = FrequencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
