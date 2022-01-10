<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectFactory extends Factory
{


    protected $model = Project::class;
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
            "title" => $this->faker->word(),
            "client" => $this->faker->company,
            "location" => $this->faker->address,
            "surface_area" => $this->faker->numberBetween(2000 , 10000),
            "year" => $this->faker->year('now'),
            "desc" => $this->faker->sentence(300),
            "best" => $this->faker->boolean(10),
            "img" => "projects/$i.png",
        ];
    }
}
