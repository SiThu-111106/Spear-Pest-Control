<?php

namespace App\Filament\Widgets;

use App\Models\Department;
use App\Models\RoleDepartment;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        if (Auth()->user()->role_id == 1 || Auth()->user()->role_id == 2) {
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

        $userId = Auth()->user()->id;
        $userDepartment = RoleDepartment::where('user_id', $userId)->value('department_id');
        $department = Department::where('id', $userDepartment)->value('name');

        if ($department == "Sales") {
            return [
                Stat::make('Sales Users', RoleDepartment::query()->where('department_id', 2)->count())
                    ->description('All Sales Users From SpearPestControl')
                    ->color('success'),
            ];
        }

        if ($department == "CRM") {
            return [
                Stat::make('CRM Users', RoleDepartment::query()->where('department_id', 1)->count())
                    ->description('All CRM Users From SpearPestControl')
                    ->color('success'),
            ];
        }

        if ($department == "Logistics") {
            return [
                Stat::make('Logistic Users', RoleDepartment::query()->where('department_id', 3)->count())
                    ->description('All Logistics Users From SpearPestControl')
                    ->color('success'),
            ];
        }

        return [];

    }
}
