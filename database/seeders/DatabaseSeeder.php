<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory()->create([
            'name' => 'Alec Thompson',
            'email' => 'admin@corporateui.com',
            'password' => Hash::make('secret'),
            'phone' => 3383106200,
            'role' => 'admin'
        ]);

        Role::factory()->create([
            'nome' => 'admin'
        ]);

        Role::factory()->create([
            'nome' => 'cameriere',
        ]);

        Role::factory()->create([
            'nome' => 'cliente',
        ]);
    }
}
