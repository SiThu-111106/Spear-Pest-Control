<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'CRM'],
            ['name' => 'Sales'],
            ['name' => 'Logistics'],
        ];
        foreach ($data as $value) {
            Department::updateOrCreate($value);
        }
    }
}
