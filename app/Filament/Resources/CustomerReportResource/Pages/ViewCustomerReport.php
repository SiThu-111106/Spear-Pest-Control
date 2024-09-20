<?php

namespace App\Filament\Resources\CustomerReportResource\Pages;

use App\Filament\Resources\CustomerReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewCustomerReport extends ViewRecord
{
    protected static string $resource = CustomerReportResource::class;

    // protected function getHeaderActions(): array
    // {
    //     return [
    //         // Actions\EditAction::make(),
    //     ];
    // }
}
