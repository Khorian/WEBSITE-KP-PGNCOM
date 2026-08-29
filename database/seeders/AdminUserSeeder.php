<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@pgastelkom.co.id'],
            [
                'name' => 'Admin PGAS',
                'password' => Hash::make('password123'), // Password untuk login admin nanti
            ]
        );
    }
}
