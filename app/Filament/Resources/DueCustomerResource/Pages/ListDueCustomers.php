<?php

namespace App\Filament\Resources\DueCustomerResource\Pages;

use App\Filament\Resources\DueCustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDueCustomers extends ListRecords
{
    protected static string $resource = DueCustomerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
