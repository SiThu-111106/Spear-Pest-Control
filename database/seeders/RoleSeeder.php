<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Super Admin', 'type' => 'Super Admin'],
            ['name' => 'Admin', 'type' => 'Admin'],
            ['name' => 'Intern', 'type' => 'Intern'],
            ['name' => 'Employee', 'type' => 'Employee'],
            ['name' => 'Manager', 'type' => 'Manager'],
        ];
        foreach ($data as $value) {
            Role::updateOrCreate($value);
        }
    }
}
