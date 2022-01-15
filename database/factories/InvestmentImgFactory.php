<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class InvestmentImgFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        
        static $i = 0;
        $i++;
        return [
            
            "name" => "investmentImg/$i.png",
        ];
        
    }
}
