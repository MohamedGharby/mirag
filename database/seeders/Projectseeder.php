<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\ProjectImg;
use Illuminate\Database\Seeder;

class Projectseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Project::factory()->has(
            ProjectImg::factory()->count(3)
        )->count(30)->create();
    }
}
