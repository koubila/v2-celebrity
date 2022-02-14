<?php

namespace Database\Factories;

use App\Models\Star;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Star>
 */
class StarFactory extends Factory
{
    protected $model = Star::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'firstname' => $this->faker->firstName($gender = null||'male'||'female'),
            'lastname' => $this->faker->lastName(),
            'image_path'=> $this->faker->imageUrl($width = 50, $height = 50),
            'description'=>$this->faker->realText($maxNbChars = 200, $indexSize = 2), 
        ];
    }
}
