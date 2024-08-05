<?php

namespace App\Filament\Resources\SaleUserResource\Pages;

use App\Filament\Resources\SaleUserResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSaleUser extends EditRecord
{
    protected static string $resource = SaleUserResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
