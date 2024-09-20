<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Payment;
use App\Models\Customer;
use Filament\Forms\Form;
use App\Models\Treatment;
use App\Models\Department;
use Filament\Tables\Table;
use App\Models\RoleDepartment;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Blade;
use Filament\Forms\Components\Section;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\CustomerResource\Pages;
use App\Models\Frequency;

class CustomerResource extends Resource
{
    protected static ?string $model = Customer::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Customer Details')->schema([
                    Forms\Components\Select::make('frequency_id')
                        ->unique(ignoreRecord: true)
                        ->label('Frequency')
                        ->options(Frequency::pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\Select::make('payment_id')
                        ->unique(ignoreRecord: true)
                        ->label('Payment')
                        ->options(Payment::pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
                    Forms\Components\Select::make('treatment_id')
                        ->unique(ignoreRecord: true)
                        ->label('Treatment')
                        ->options(Treatment::pluck('name', 'id'))
                        ->searchable()
                        ->preload()
                        ->required(),
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
                    Forms\Components\Select::make('status')
                        ->searchable()
                        ->preload()
                        ->options([
                            '1' => 'Active',
                            '3' => 'Pending',
                        ]),
                    Forms\Components\TextInput::make('total')
                        ->label('Total Amount')
                        ->maxLength(255)
                        ->regex('/^[1-9]\d*$/')
                        ->columnSpan(2)
                        ->required(),
                    Forms\Components\TextInput::make('payment')
                        ->label('Customer Total Payment')
                        ->regex('/^[1-9]\d*$/')
                        ->maxLength(255)
                        ->required(),
                    Forms\Components\TextInput::make('overdue')
                        ->label('Customer Overdue Amount')
                        ->regex('/^[0-9]\d*$/')
                        ->maxLength(255),
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
                // Tables\Columns\TextColumn::make('gender')
                //     ->searchable(),
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
                // Tables\Actions\EditAction::make()->outlined()->button(),
                Tables\Actions\Action::make('changeStatus')
                    ->label(fn(Customer $record): string => $record->status === 1 ? 'Active' : 'Pending')
                    ->outlined()
                    ->button()
                    ->action(function (Customer $record) {
                        $record->status = $record->status === 1 ? 3 : 1;
                        $record->save();
                    })
                    ->requiresConfirmation()
                    ->icon(fn(Customer $record) => $record->status === '1' ? 'heroicon-o-x-circle' : 'heroicon-o-check-circle'),
                Tables\Actions\Action::make('markDue')
                    ->label('Mark as Due')
                    ->outlined()
                    ->button()
                    ->action(function (Customer $record) {
                        $record->status = 2;
                        $record->save();
                    })
                    ->requiresConfirmation()
                    ->icon('heroicon-o-exclamation-circle'),
                Tables\Actions\Action::make('inactive')
                    ->label('Deactivate')
                    ->outlined()
                    ->button()
                    ->action(function (Customer $record) {
                        $record->delete();
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
            'index' => Pages\ListCustomers::route('/'),
            'create' => Pages\CreateCustomer::route('/create'),
            'view' => Pages\ViewCustomer::route('/{record}'),
            'edit' => Pages\EditCustomer::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');
        if ($department == "Sales") {
            return true;
        } else {
            return false;
        }
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()
            ->whereIn('status', [1, 3]);
    }
}
