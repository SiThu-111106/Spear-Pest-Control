<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\Pest;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\PestResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\PestResource\RelationManagers;
use App\Models\PestType;

class PestResource extends Resource
{
    protected static ?string $model = Pest::class;

    // protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'Pest';
    protected static ?int $navigationSort = 2;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Pest Details')->schema([
                    Forms\Components\FileUpload::make('image')
                        ->image()
                        ->columnSpanFull()
                        ->required(),
                    Forms\Components\Select::make('pest_type_id')
                        ->label('Pest Type')
                        ->options(PestType::all()->pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\TextInput::make('name')
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->required(),
                    Forms\Components\Textarea::make('content')
                        ->columnSpanFull()
                        ->rows(5)
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->searchable(),
                Tables\Columns\TextColumn::make('pestType.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->label('Pest Name')
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
            'index' => Pages\ListPests::route('/'),
            'create' => Pages\CreatePest::route('/create'),
            'view' => Pages\ViewPest::route('/{record}'),
            'edit' => Pages\EditPest::route('/{record}/edit'),
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
