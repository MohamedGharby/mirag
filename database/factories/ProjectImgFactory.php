<?php

namespace Database\Factories;

use App\Models\ProjectImg;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProjectImgFactory extends Factory
{

    protected $model = ProjectImg::class;
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

            "name"=> "projectImg/$i.png"
            //
        ];
    }
}
