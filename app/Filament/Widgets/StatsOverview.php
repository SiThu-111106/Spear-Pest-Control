<?php

namespace App\Filament\Widgets;

use App\Models\RoleDepartment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        if (Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2){
            return [
                Stat::make('All Users', RoleDepartment::query()->count())
                    ->description('All Users From SpearPestControl')
                    ->color('success'),
                Stat::make('Logistic Users', RoleDepartment::query()->where('department_id', 3)->count())
                    ->description('All Logistics Users From SpearPestControl')
                    ->color('success'),
                Stat::make('Sales Users', RoleDepartment::query()->where('department_id', 2)->count())
                    ->description('All Sales Users From SpearPestControl')
                    ->color('success'),
                Stat::make('CRM Users', RoleDepartment::query()->where('department_id', 1)->count())
                    ->description('All CRM Users From SpearPestControl')
                    ->color('success'),
            ];
        }
        return [];
    }
}
