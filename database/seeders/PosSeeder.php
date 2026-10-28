<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class PosSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            [
                'full_name' => 'Juan Dela Cruz',
                'email' => 'juan@example.com',
                'phone' => '09171234567',
            ],
            [
                'full_name' => 'Maria Santos',
                'email' => 'maria@example.com',
                'phone' => '09181234567',
            ],
            [
                'full_name' => 'Carlo Reyes',
                'email' => 'carlo@example.com',
                'phone' => '09191234567',
            ],
            [
                'full_name' => 'Anne Cruz',
                'email' => 'anne@example.com',
                'phone' => '09201234567',
            ],
            [
                'full_name' => 'Mark Garcia',
                'email' => 'mark@example.com',
                'phone' => '09211234567',
            ],
        ];

        foreach ($customers as $customer) {
            Customer::updateOrCreate(
                ['email' => $customer['email']],
                $customer
            );
        }

        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Admin User',
                'email' => 'admin@example.com',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Cashier One',
                'email' => 'cashier1@example.com',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Cashier Two',
                'email' => 'cashier2@example.com',
                'role' => 'Cashier',
            ],
            [
                'username' => 'inventory',
                'full_name' => 'Inventory Staff',
                'email' => 'inventory@example.com',
                'role' => 'Inventory Staff',
            ],
            [
                'username' => 'manager',
                'full_name' => 'Manager User',
                'email' => 'manager@example.com',
                'role' => 'Manager',
            ],
        ];

        foreach ($users as $data) {
            $user = User::firstOrNew([
                'username' => $data['username'],
            ]);

            $user->fill($data);
            $user->name = $data['full_name'];

            if (! $user->exists) {
                $user->password = Hash::make(Str::random(32));
            }

            $user->save();
        }
    }
}