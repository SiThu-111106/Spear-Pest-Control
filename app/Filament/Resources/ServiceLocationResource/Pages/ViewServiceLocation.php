<?php

namespace App\Filament\Resources\ServiceLocationResource\Pages;

use App\Filament\Resources\ServiceLocationResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewServiceLocation extends ViewRecord
{
    protected static string $resource = ServiceLocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
