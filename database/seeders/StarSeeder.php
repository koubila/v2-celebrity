<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\Star;


class StarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   public function run()
   {
      DB::table('stars')->insert(
      [
         [
            'firstname' => 'Angelina',
            'lastname' => 'Jolie',
            'description' => Str::random(50),
            'image_path' => Storage::url('public/images/angelina.jpg'),
         ],
         [
            'firstname' => 'Beyonce',
            'lastname' => 'Knowles',
            'description' => Str::random(50),
            'image_path' => Storage::url('public/images/beyonce.jpg'),
         ],
         [
            'firstname' => 'Jenifer',
            'lastname' => 'Anistion',
            'description' => Str::random(50),
            'image_path' => Storage::url('public/images/jenifer.jpg'),
         ],
         [
            'firstname' => 'Jason',
            'lastname' => 'Mamoa',
            'description' => Str::random(50),
            'image_path' => Storage::url('public/images/jason.jpg'),
         ],
      ]);
      Star::factory()->count(5)->create();
   }
}
