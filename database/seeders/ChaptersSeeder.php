<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ChaptersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) { 
            DB::table('chapters')->insert([
                "story_id" => mt_rand(1, 5),
                "title" => Str::random(50),
                "summary" => Str::random(300),
                "text" => Str::random(3000)
            ]);
        }
    }
}
