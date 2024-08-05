<?php

namespace App\Filament\Resources\RoleDepartmentResource\Pages;

use App\Filament\Resources\RoleDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRoleDepartments extends ListRecords
{
    protected static string $resource = RoleDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
