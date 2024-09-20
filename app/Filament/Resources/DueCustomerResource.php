<?php

namespace App\Filament\Resources;

use App\Filament\Resources\DueCustomerResource\Pages;
use App\Models\Customer;
use App\Models\Department;
use App\Models\RoleDepartment;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Blade;

class DueCustomerResource extends Resource
{
    protected static ?string $model = Customer::class;
    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    public static function canCreate(): bool
    {
        return false;
    }

    public static function getLabel(): ?string
    {
        return 'Over Due Customer';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Customer Details')->schema([
                    Forms\Components\TextInput::make('name')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\TextInput::make('email')
                        ->maxLength(255)
                        ->unique(ignoreRecord: true),
                    Forms\Components\Select::make('gender')
                        ->searchable()
                        ->preload()
                        ->options([
                            'Male' => 'Male',
                            'Female' => 'Female',
                            'Other' => 'Other',
                        ])
                        ->required(),
                    Forms\Components\TextInput::make('phone')
                        ->regex('/^09\d{9}$/')
                        ->unique(ignoreRecord: true)
                        ->required(),
                    Forms\Components\TextInput::make('total')
                        ->label('Total Amount')
                        ->maxLength(255)
                        ->columnSpan(2)
                        ->required(),
                    Forms\Components\TextInput::make('payment')
                        ->label('Customer Total Payment')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\TextInput::make('overdue')
                        ->label('Customer Overdue Amount')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\Textarea::make('issue')
                        ->label("Pest's Issue")
                        ->rows(5)
                        ->columnSpanFull()
                        ->required(),
                    Forms\Components\Textarea::make('remark')
                        ->rows(5)
                        ->columnSpanFull(),
                    Forms\Components\Textarea::make('address')
                        ->rows(5)
                        ->columnSpanFull()
                        ->required(),
                ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('phone')
                    ->searchable(),
                Tables\Columns\TextColumn::make('gender')
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
                Tables\Actions\Action::make('markDue')
                    ->label(fn(Customer $record) => $record->status === 2 ? 'Make Payment' : 'Overdue')
                    ->outlined()
                    ->button()
                    ->action(function (Customer $record) {
                        $record->status = 1;
                        $record->save();
                    })
                    ->requiresConfirmation()
                    ->icon('heroicon-o-exclamation-circle'),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                    Tables\Actions\BulkAction::make('Export')
                        ->icon('heroicon-m-arrow-down-tray')
                        ->openUrlInNewTab()
                        ->deselectRecordsAfterCompletion()
                        ->action(function ($records) {
                            return response()->streamDownload(function () use ($records) {
                                // Ensure $records is correctly handled for the PDF generation
                                $html = Blade::render('pdf', ['records' => $records]);
                                $pdf = Pdf::loadHTML($html)->stream();
                                echo $pdf;
                            }, 'users.pdf');
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
            'index' => Pages\ListDueCustomers::route('/'),
            'create' => Pages\CreateDueCustomer::route('/create'),
            'view' => Pages\ViewDueCustomer::route('/{record}'),
            'edit' => Pages\EditDueCustomer::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');
        if ($department == "CRM") {
            return true;
        } else {
            return false;
        }
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('status', [2]);
    }
}
