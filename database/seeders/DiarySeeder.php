<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class DiarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('diaries')->insert([
            'title' => "NO1",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 1,
        ]);
        DB::table('diaries')->insert([
            'title' => "NO2",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 2,
        ]);
        DB::table('diaries')->insert([
            'title' => "NO3",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 3,
        ]);
        DB::table('diaries')->insert([
            'title' => "NO4",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 4,
        ]);
        DB::table('diaries')->insert([
            'title' => "NO5",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 5,
        ]);
        DB::table('diaries')->insert([
            'title' => "NO6",
            'body' => "sample",
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            'date' => new DateTime(),
            'image_url' => "diary",
            'user_id' => 6,
        ]);
    }
}
