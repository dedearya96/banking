<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'role' => 'customer_services',
                'name' => 'Andi Customer Services',
                'username' => 'andi23311',
                'email' => 'andi@gmail.com',
                'password' => '12345678',
                'saldo' => 1000000,
            ],
            [
                'role' => 'nasabah',
                'name' => 'Arya',
                'username' => 'arya123',
                'email' => 'arya@gmail.com',
                'password' => '12345678',
                'saldo' => 500000,
            ],
            [
                'role' => 'nasabah',
                'name' => 'Surya',
                'username' => 'surya123',
                'email' => 'surya@gmail.com',
                'password' => '12345678',
                'saldo' => 5000000,
            ],
            [
                'role' => 'nasabah',
                'name' => 'Parno',
                'username' => 'parno123',
                'email' => 'parno@gmail.com',
                'password' => '12345678',
                'saldo' => 2000000,
            ]
        ];
        foreach ($users as $user) {
            User::create([
                'role' => $user['role'],
                'name' => $user['name'],
                'username' => $user['username'],
                'email' => $user['email'],
                'password' => Hash::make($user['password']),
                'saldo' => $user['saldo'],
            ]);
        }
    }
}
