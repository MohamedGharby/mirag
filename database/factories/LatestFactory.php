<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LatestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $i = 1;
        $i++;
        return [
            //

            "title" => $this->faker->catchPhrase(),
            "desc" => $this->faker->sentence(200),
            "main_img" => "latests/$i.png",
        ];
    }
}
