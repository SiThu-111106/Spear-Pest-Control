<?php

namespace App\Filament\Resources\RoleDepartmentResource\Pages;

use App\Filament\Resources\RoleDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRoleDepartment extends CreateRecord
{
    protected static string $resource = RoleDepartmentResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
