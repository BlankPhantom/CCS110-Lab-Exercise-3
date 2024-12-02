<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Update or create the first user (Test User)
        User::updateOrCreate(
            ['email' => 'test@example.com'],
            ['name' => 'Test User', 'password' => Hash::make('password')]
        );

        // Update or create the second user (Catherine)
        User::updateOrCreate(
            ['email' => 'cathbello@gmail.com'],
            ['name' => 'Catherine', 'password' => Hash::make('cath123')]
        );
    }
}
