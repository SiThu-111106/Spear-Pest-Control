<?php

namespace App\Filament\Resources\DueCustomerResource\Pages;

use App\Filament\Resources\DueCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDueCustomer extends EditRecord
{
    protected static string $resource = DueCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            // Actions\DeleteAction::make(),
        ];
    }
}
