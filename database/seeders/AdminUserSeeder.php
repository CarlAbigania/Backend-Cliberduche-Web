<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if not exists
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'],
            [
                'firstname' => 'Administrator',
                'lastname' => 'Admin',
                'middlename' => null,
                'contact_number' => '09123456789',
                'password' => Hash::make('admin123'),
                'role' => 'admin',
                'account_status' => 'approved',
                'is_active' => true,
            ]
        );
    }
}

