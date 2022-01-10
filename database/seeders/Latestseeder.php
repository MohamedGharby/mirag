<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Latest;
use App\Models\LatestImg;
use Illuminate\Database\Seeder;

class Latestseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Latest::factory()
        ->has(
            LatestImg::factory()->count(3),
        )->count(5)->create();
    }
}
