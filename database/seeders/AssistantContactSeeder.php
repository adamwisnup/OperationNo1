<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AssistantContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'AWP',
          'name' => 'Adam Wisnu Pradana',
          'nohp' => '081332938169',
          'line' => 'adamwisnup',
          'instagram' => 'adam_wisnup',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'MAI',
          'name' => 'Adam Wisnu Pradana',
          'nohp' => '081332938169',
          'line' => 'adamwisnup',
          'instagram' => 'adam_wisnup',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
        DB::table('assistantcontacts')->insert([
          'photo' => Str::random(15),
          'ascod' => 'MAI',
          'name' => 'Adam Wisnu Pradana',
          'nohp' => '081332938169',
          'line' => 'adamwisnup',
          'instagram' => 'adam_wisnup',
          'created_at' => date('Y-m-d H:i:s'),
          'updated_at' => date('Y-m-d H:i:s'),
        ]);
    }
}
