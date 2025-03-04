<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'first_name' => 'John',
                'last_name' => 'Doe',
                'email' => 'john@john.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Jane',
                'last_name' => 'Smith',
                'email' => 'jane@jane.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Alice',
                'last_name' => 'Johnson',
                'email' => 'alice@alice.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Bob',
                'last_name' => 'Williams',
                'email' => 'bob@bob.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Charlie',
                'last_name' => 'Brown',
                'email' => 'brown@brown.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'David',
                'last_name' => 'Miller',
                'email' => 'david@david.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Eve',
                'last_name' => 'Davis',
                'email' => 'eve@eve.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Frank',
                'last_name' => 'Wilson',
                'email' => 'frank@frank.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Grace',
                'last_name' => 'Moore',
                'email' => 'moore@moore.com',
                'password' => Hash::make('password'),
            ],
            [
                'first_name' => 'Hannah',
                'last_name' => 'Taylor',
                'email' => 'taylor@taylor.com',
                'password' => Hash::make('password'),
            ],
        ]);
    }
}
