<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ExpertSocialWebsiteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "gmail" =>$this->faker->freeEmail() ,
            "facebook" =>$this->faker->safeEmail() ,
            "twitter" =>$this->faker->safeEmail() ,
            "instagram" =>$this->faker->safeEmail() ,
            "linkedin" =>$this->faker->safeEmail()
        ];
    }
}
