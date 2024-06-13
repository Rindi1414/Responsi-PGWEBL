<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Create multiple users
        $user = [
        [
            'name' => 'Admin',
            'phone' => '082139704108',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
        ],
        [
            'name' => 'RINDI',
            'phone' => '0821234567890',
            'email' => 'user@gmail.com',
            'password' => bcrypt('1414'),
        ],
        [
            'name' => 'LARAVEL',
            'phone' => '082139704108',
            'email' => 'rinditrisetyaningsih2004@mail.ugm.ac.id',
            'password' => bcrypt('1414Rinditri'),
        ],
    ];

    //  Insert the user into the database
    DB::table('users')->insert($user);
    }
}
