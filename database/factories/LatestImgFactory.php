<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LatestImgFactory extends Factory
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
            "name" => "latestImg/$i.png",
        ];
    }
}
