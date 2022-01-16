<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $this->call([
            Roleseeder::class,
            Userseeder::class,
            Socialseeder::class,
            Projectseeder::class,
            Latestseeder::class,
            Commentseeder::class,
            CompanySeeder::class,
            Expertseeder::class,
            ExpertSocialWebsiteSeeder::class,
        ] );
    }
}
