<?php

namespace App\Filament\Resources\DueCustomerReportResource\Pages;

use App\Filament\Resources\DueCustomerReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDueCustomerReports extends ListRecords
{
    protected static string $resource = DueCustomerReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
