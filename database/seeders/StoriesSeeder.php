<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class StoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) { 
            DB::table('stories')->insert([
                "title" => Str::random(7),
                "synopsis" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus eos nobis omnis ipsam architecto, officia ullam velit repudiandae, quo consequuntur expedita porro libero? Provident beatae hic fugit autem, laborum cupiditate!"
            ]);
        }
    }
}
