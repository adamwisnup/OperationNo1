<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name' => 'Adam Wisnu Pradana',
            'ascod' => 'AWP',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('admins')->insert([
            'name' => 'Vincentius Antu',
            'ascod' => 'CEN',
            'password' => Hash::make('123456789'),
        ]);
        DB::table('admins')->insert([
            'name' => 'M. Alfitra Zulfikar',
            'ascod' => 'MAI',
            'password' => Hash::make('123456789'),
        ]);
    }
}
