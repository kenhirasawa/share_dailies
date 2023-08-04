<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class diarySeeder extends Seeder
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
    }
}
