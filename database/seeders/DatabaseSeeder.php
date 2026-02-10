<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
            DepartementSeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            OrderSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'manager',
            'email' => 'manager@example.com',
            'role_id' => 2,
            'departement_id' => 1,
            'password' => Hash::make('password'),
            'statu' => 'accept',




        ]);
        User::factory()->create([
            'name' => 'manager01',
            'email' => 'manager01@example.com',
            'role_id' => 2,
            'departement_id' => 2,
            'password' => Hash::make('password'),
            'statu' => 'accept',

        ]);

        User::create([
            'name' => 'admin',
            'email' => 'admin@example.com',
            'role_id' => 1,
            'departement_id' => 3,
            'password' => Hash::make('password'),
            'statu' => 'accept',


        ]);
        User::create([
            'name' => 'employee',
            'email' => 'employee@example.com',
            'role_id' => 3,
            'departement_id' => 3,
            'password' => Hash::make('password'),


        ]);
    }
}
