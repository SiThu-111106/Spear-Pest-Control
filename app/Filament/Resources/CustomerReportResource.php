<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Customer;
use Filament\Forms\Form;
use App\Models\Department;
use Filament\Tables\Table;
use App\Models\CustomerReport;
use App\Models\RoleDepartment;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Blade;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\CustomerReportResource\Pages;
use App\Filament\Resources\CustomerReportResource\RelationManagers;
use Brick\Math\BigInteger;

class CustomerReportResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationGroup = 'Reports';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getLabel(): ?string
    {
        return 'Customer Report';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('payment.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('treatment.name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                // Tables\Columns\TextColumn::make('status')
                    // ->label(fn(?Customer $record): string => $record && $record->status === 1 ? 'Deactivate' : 'Activate')
                    // ->sortable()
                    // ->searchable(),
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
                Tables\Actions\Action::make('changeStatus')
                    ->label(fn(Customer $record): string => $record->status === 1 ? 'Active' : 'Pending')
                    ->outlined()
                    ->button()
                    // ->requiresConfirmation()
                    ->icon(fn(Customer $record) => $record->status === '1' ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle'),
                // Tables\Actions\ViewAction::make(),
                // Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('Export')
                        ->icon('heroicon-m-arrow-down-tray')
                        ->openUrlInNewTab()
                        ->deselectRecordsAfterCompletion()
                        ->action(function ($records) {
                            return response()->streamDownload(function () use ($records) {
                                $html = Blade::render('customers', ['records' => $records]);
                                $pdf = Pdf::loadHTML($html)->stream();
                                echo $pdf;
                            }, 'customers.pdf');
                        }),
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
            'index' => Pages\ListCustomerReports::route('/'),
            'create' => Pages\CreateCustomerReport::route('/create'),
            'view' => Pages\ViewCustomerReport::route('/{record}'),
            'edit' => Pages\EditCustomerReport::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');
        if ($department == "Sales" || Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2) {
            return true;
        } else {
            return false;
        }
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('status', [0, 1]);
    }
}
