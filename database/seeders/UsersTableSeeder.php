<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[

        [
            'name' => 'John',
            'email' => 'vdt@gmail',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'John1',
            'email' => 'vdt1@gmail',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'John2',
            'email' => 'vdt2@gmail',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'John3',
            'email' => 'vdt3@gmail',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ],
        [
            'name' => 'John4',
            'email' => 'vdt4@gmail',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now()
        ],

        ];
        DB::table('users')->insert($data);
    }
}
