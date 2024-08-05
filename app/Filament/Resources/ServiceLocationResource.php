<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Location;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\ServiceLocation;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ServiceLocationResource\Pages;
use App\Filament\Resources\ServiceLocationResource\RelationManagers;
use App\Models\Department;
use App\Models\RoleDepartment;

class ServiceLocationResource extends Resource
{
    protected static ?string $model = Location::class;

    protected static ?string $navigationIcon = 'heroicon-o-map-pin';
    protected static ?string $navigationGroup = 'Locations';
    protected static ?int $navigationSort = 4;
    protected static ?string $navigationLabel = 'Service Location';

    public static function getLabel(): ?string
    {
        return 'Service Location';
    }

    public static function canCreate(): bool
    {
        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');
        if ($department == "Logistics") {
            return true;
        } else {
            return false;
        }
    }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Location Details')->schema([
                    Forms\Components\TextInput::make('user')
                        ->label('Customer Name')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\DatePicker::make('date')
                        ->afterOrEqual(today())
                        ->displayFormat('d/m/Y'),
                    Forms\Components\Select::make('sector')
                        ->searchable()
                        ->preload()
                        ->options([
                            'Hospital' => 'Hospital',
                            'Hotel' => 'Hotel',
                            'Restaurant' => 'Restaurant',
                            'Club' => 'Club',
                            'Bars' => 'Bars',
                            'Apartment' => 'Apartment',
                            'House' => 'House',
                            'Schools' => 'Schools',
                            'Clinic' => 'Clinic',
                            'Office' => 'Office',
                        ])
                        ->required(),
                    Forms\Components\Textarea::make('address')
                        ->required()
                        ->rows(5)
                        ->columnSpanFull(),
                ])->columns(3),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sector')
                    ->searchable(),
                Tables\Columns\TextColumn::make('date')
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
                // Tables\Actions\ViewAction::make()->outlined()->button(),
                Tables\Actions\EditAction::make()->outlined()->button(),
                Tables\Actions\DeleteAction::make()->outlined()->button(),
                Tables\Actions\DeleteAction::make()->outlined()->button(),
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
            'index' => Pages\ListServiceLocations::route('/'),
            'create' => Pages\CreateServiceLocation::route('/create'),
            'view' => Pages\ViewServiceLocation::route('/{record}'),
            'edit' => Pages\EditServiceLocation::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');
        if ($department == "Logistics") {
            return true;
        } else {
            return false;
        }
    }
}
