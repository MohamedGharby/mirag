<?php

namespace Database\Seeders;

use App\Models\Expert;
use App\Models\ExpertSocialWebsite;
use Illuminate\Database\Seeder;

class Expertseeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Expert::factory()->count(6)->create();
    }
}
