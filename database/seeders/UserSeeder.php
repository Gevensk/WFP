<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $manager = User::create([
            'name' => 'Manager User',
            'email' => 'manager@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Manager'
        ]);

        // Membuat user dengan role Employee
        $employee1 = User::create([
            'name' => 'Employee User 1',
            'email' => 'employee1@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Employee'
        ]);

        $employee2 = User::create([
            'name' => 'Employee User 2',
            'email' => 'employee2@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Employee'
        ]);

        // Membuat user dengan role Customer
        $customer1 = User::create([
            'name' => 'Customer User 1',
            'email' => 'customer1@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Customer'
        ]);

        $customer2 = User::create([
            'name' => 'Customer User 2',
            'email' => 'customer2@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Customer'
        ]);

        $customer3 = User::create([
            'name' => 'Customer User 3',
            'email' => 'customer3@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Customer'
        ]);

        $customer4 = User::create([
            'name' => 'Customer User 4',
            'email' => 'customer4@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Customer'
        ]);

        $customer5 = User::create([
            'name' => 'Customer User 5',
            'email' => 'customer5@example.com',
            'password' => '$2a$10$Aj3T78IfkHprzanIkGMGWebC9.4B49QtV7GiT30NEkQZOL8aPGc/a',
            'role' => 'Customer'
        ]);
    }
}
