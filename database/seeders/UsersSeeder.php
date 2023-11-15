<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = 
        [
            [
                'username' => 'demo1',
                'password' => Hash::make('skills2023d1'),
                'created_at' => now()
            ],
            [
                'username' => 'demo2',
                'password' => Hash::make('skills2023d2'),
                'created_at' => now()
            ],
            
        ];

        DB::table('users')->insert($users);
    }
}
