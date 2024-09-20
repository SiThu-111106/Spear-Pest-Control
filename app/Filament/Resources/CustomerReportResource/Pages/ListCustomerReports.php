<?php

namespace App\Filament\Resources\CustomerReportResource\Pages;

use App\Filament\Resources\CustomerReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCustomerReports extends ListRecords
{
    protected static string $resource = CustomerReportResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         // Actions\CreateAction::make(),
    //     ];
    // }
}
