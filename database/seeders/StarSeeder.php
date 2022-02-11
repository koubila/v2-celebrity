<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;


class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stars')->insert([
         [
            'firstname' => 'Angelina',
            'lastname' => 'Jolie',
            'description' => Str::random(30),
            'image_path' => Storage::url('public/images/angelina.jpg'),
         ],
         [
            'firstname' => 'Beyonce',
            'lastname' => 'Knowles',
            'description' => Str::random(30),
            'image_path' => 'null',
         ],
         [
            'firstname' => 'Jenifer',
            'lastname' => 'Anistion',
            'description' => Str::random(30),
            'image_path' => 'null',
         ],
        ]);
    }
}
