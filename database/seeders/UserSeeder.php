<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use DateTime;

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
            'name' => 'hirasawa',
            'email' => 'devioa@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('users')->insert([
            'name' => 'hirasawa1',
            'email' => 'devioa1@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
         DB::table('users')->insert([
            'name' => 'hirasawa2',
            'email' => 'devioa2@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'hirasawa3',
            'email' => 'devioa3@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'hirasawa4',
            'email' => 'devioa4@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'hirasawa5',
            'email' => 'devioa5@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        
        DB::table('users')->insert([
            'name' => 'hirasawa6',
            'email' => 'devioa6@gmail.com',
            'password' => Hash::make('password'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
    }
}
