<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Super Admin', 'role_id' => 1, 'email' => 'superadmin@gmail.com', 'password' => Hash::make('admin')],
            ['name' => 'Admin', 'role_id' => 2, 'email' => 'admin@gmail.com', 'password' => Hash::make('admin')],
        ];
        foreach ($data as $value) {
            User::updateOrCreate($value);
        }
    }
}
