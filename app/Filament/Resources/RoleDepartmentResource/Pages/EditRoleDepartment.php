<?php

namespace App\Filament\Resources\RoleDepartmentResource\Pages;

use App\Filament\Resources\RoleDepartmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRoleDepartment extends EditRecord
{
    protected static string $resource = RoleDepartmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
