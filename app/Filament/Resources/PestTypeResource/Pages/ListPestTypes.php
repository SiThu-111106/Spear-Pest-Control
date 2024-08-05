<?php

namespace App\Filament\Resources\PestTypeResource\Pages;

use App\Filament\Resources\PestTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPestTypes extends ListRecords
{
    protected static string $resource = PestTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
