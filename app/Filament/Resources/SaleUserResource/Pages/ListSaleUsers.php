<?php

namespace App\Filament\Resources\SaleUserResource\Pages;

use App\Filament\Resources\SaleUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSaleUsers extends ListRecords
{
    protected static string $resource = SaleUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
