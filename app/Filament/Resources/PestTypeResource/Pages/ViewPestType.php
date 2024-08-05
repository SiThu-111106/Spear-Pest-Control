<?php

namespace App\Filament\Resources\PestTypeResource\Pages;

use App\Filament\Resources\PestTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewPestType extends ViewRecord
{
    protected static string $resource = PestTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
