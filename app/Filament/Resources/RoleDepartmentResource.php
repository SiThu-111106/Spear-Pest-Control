<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Role;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\Department;
use Filament\Tables\Table;
use App\Models\RoleDepartment;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\RoleDepartmentResource\Pages;
use App\Filament\Resources\RoleDepartmentResource\RelationManagers;

class RoleDepartmentResource extends Resource
{
    protected static ?string $model = RoleDepartment::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationGroup = 'Position';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Department Details')->schema([
                    Forms\Components\Select::make('role_id')
                        ->label('Position')
                        ->options(Role::whereNotIn('type', ['Super Admin', 'Admin'])->pluck('type', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\Select::make('user_id')
                        ->unique(ignoreRecord: true)
                        ->label('User')
                        ->options(User::whereNotIn('role_id', [1, 2])->orWhereNull('role_id')->pluck('email', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\Select::make('department_id')
                        ->label('Department')
                        ->options(Department::pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Employee')
                    ->searchable(),
                Tables\Columns\TextColumn::make('role.name')
                    ->label('Position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('department.name')
                    ->label('Position')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('deleted_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->outlined()->button(),
                Tables\Actions\EditAction::make()->outlined()->button(),
                Tables\Actions\DeleteAction::make()->outlined()->button(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListRoleDepartments::route('/'),
            'create' => Pages\CreateRoleDepartment::route('/create'),
            'view' => Pages\ViewRoleDepartment::route('/{record}'),
            'edit' => Pages\EditRoleDepartment::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        if(Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2)
        {
            return true;
        }
        else {
            return false;
        }
    }
}
