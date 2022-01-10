<?php

namespace Database\Seeders;

use App\Models\Comment;
use App\Models\Latest;
use Illuminate\Database\Seeder;

class Commentseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Comment::factory()->count(4)->for(
           Latest::factory()
        )->create();
    }
}
