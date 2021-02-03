<?php

namespace Database\Seeders;
use App\Models\Photo;
use Faker\Factory as Faker;

use Illuminate\Database\Seeder;

class PhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $photos = [
            ['title' => 'test1',
            'description' => 'test1 photo',
            'user_id' => 1],
            ['title' => 'test2',
            'description' => 'test2 photo',
            'user_id' => 2],
        ];

        foreach($photos as $photo){
            \App\Models\Photo::create($photo);
        }
    }
}

