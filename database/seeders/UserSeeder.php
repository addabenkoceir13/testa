<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'admin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'admin',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('users')->insert([
            'name' => 'user#01',
            'email' => 'user01@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('users')->insert([
            'name' => 'user#02',
            'email' => 'user02@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('users')->insert([
            'name' => 'user#03',
            'email' => 'user03@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('users')->insert([
            'name' => 'user#04',
            'email' => 'user04@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('users')->insert([
            'name' => 'user#05',
            'email' => 'user05@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'inactive',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
        DB::table('users')->insert([
            'name' => 'user#06',
            'email' => 'user06@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'inactive',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);

        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => 'user07@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'user',
            'status' => 'active',
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),

        ]);
    }
}
