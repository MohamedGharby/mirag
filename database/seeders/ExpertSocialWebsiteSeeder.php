<?php

namespace Database\Seeders;

use App\Models\Expert;
use App\Models\ExpertSocialWebsite;
use Illuminate\Database\Seeder;

class ExpertSocialWebsiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExpertSocialWebsite::create([
            "expert_id" => 1,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);

        ExpertSocialWebsite::create([
            "expert_id" => 2,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);

        ExpertSocialWebsite::create([
            "expert_id" => 3,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);

        ExpertSocialWebsite::create([
            "expert_id" => 4,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);

        ExpertSocialWebsite::create([
            "expert_id" => 5,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);

        ExpertSocialWebsite::create([
            "expert_id" => 6,
            "gmail" => "www.test-socialMedia.com" ,
            "facebook" => "www.test-socialMedia.com" ,
            "twitter" => "www.test-socialMedia.com" ,
            "instagram" => "www.test-socialMedia.com" ,
            "linkedin" => "www.test-socialMedia.com"
        ]);
    }
}
