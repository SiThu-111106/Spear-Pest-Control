<?php

namespace App\Filament\Resources\RoleDepartmentResource\Pages;

use App\Filament\Resources\RoleDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewRoleDepartment extends ViewRecord
{
    protected static string $resource = RoleDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
