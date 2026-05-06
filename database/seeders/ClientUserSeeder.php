<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class ClientUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            $status = $i <= 3 ? 'pending' : 'approved';

            User::updateOrCreate(
                ['email' => 'client' . $i . '@gmail.com'],
                [
                    'firstname' => 'Client' . $i,
                    'lastname' => 'User',
                    'contact_number' => '0912345678' . $i,
                    'password' => Hash::make('password123'),
                    'role' => 'client',
                    'account_status' => $status,
                    'is_active' => true,
                ]
            );
        }
    }
}