<?php

namespace App\Filament\Resources\DueCustomerReportResource\Pages;

use App\Filament\Resources\DueCustomerReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDueCustomerReport extends EditRecord
{
    protected static string $resource = DueCustomerReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
