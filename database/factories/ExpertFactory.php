<?php

namespace Database\Factories;

use App\Models\Expert;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExpertFactory extends Factory
{
    protected $model = Expert::class;
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
            "name" => $this->faker->name("male"),
            "title" => $this->faker->jobTitle(),
            "img" => "experts/$i.png"
        ];
    }
}
