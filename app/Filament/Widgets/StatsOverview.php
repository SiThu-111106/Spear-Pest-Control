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
        return [
            Stat::make('Logistic Users', RoleDepartment::query()->where('department_id', 3)->count())
                ->description('All Logistics Users From SpearPestControl')
                ->color('success'),
            Stat::make('Bounce rate', '21%')
                // ->description('7% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-down')
                // ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('danger'),
            Stat::make('Average time on page', '3:12')
                // ->description('3% increase')
                ->descriptionIcon('heroicon-m-arrow-trending-up')
                // ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),
        ];
    }
}
