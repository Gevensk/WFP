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
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Manager'
        ]);

        // Membuat user dengan role Employee
        $employee1 = User::create([
            'name' => 'Employee User 1',
            'email' => 'employee1@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Employee'
        ]);

        $employee2 = User::create([
            'name' => 'Employee User 2',
            'email' => 'employee2@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Employee'
        ]);

        // Membuat user dengan role Customer
        $customer1 = User::create([
            'name' => 'Customer User 1',
            'email' => 'customer1@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Customer'
        ]);

        $customer2 = User::create([
            'name' => 'Customer User 2',
            'email' => 'customer2@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Customer'
        ]);

        $customer3 = User::create([
            'name' => 'Customer User 3',
            'email' => 'customer3@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Customer'
        ]);

        $customer4 = User::create([
            'name' => 'Customer User 4',
            'email' => 'customer4@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Customer'
        ]);

        $customer5 = User::create([
            'name' => 'Customer User 5',
            'email' => 'customer5@example.com',
            'password' => '$2y$10$.4K19YGu0ewP64k1T0LMiO1sHnCI6ToVJxEZVfSpcrTANwi0iA17C',
            'role' => 'Customer'
        ]);
    }
}
