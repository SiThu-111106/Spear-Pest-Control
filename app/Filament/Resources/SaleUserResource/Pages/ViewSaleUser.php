<?php

namespace App\Filament\Resources\SaleUserResource\Pages;

use App\Filament\Resources\SaleUserResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewSaleUser extends ViewRecord
{
    protected static string $resource = SaleUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
