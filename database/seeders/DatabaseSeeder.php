<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB; // ✅ wymagany import
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::firstOrCreate(
            ['email' => 'test@example.com'],
            [
                'name' => 'Test User',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pass1234'),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Administrator',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('admin1234'),
                'remember_token' => Str::random(10),
                'role' => 'admin',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'ala@example.com'],
            [
                'name' => 'Alicja Deweloperska',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pass1234'),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'marcin@example.com'],
            [
                'name' => 'Marcin Testowy',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pass1234'),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );

        User::firstOrCreate(
            ['email' => 'tomasz@example.com'],
            [
                'name' => 'Tomasz Testowy',
                'email_verified_at' => Carbon::now(),
                'password' => Hash::make('pass1234'),
                'remember_token' => Str::random(10),
                'role' => 'user',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
        
        

        $this->call([
            TodoItemsSeeder::class,
        ]);
    }
}
