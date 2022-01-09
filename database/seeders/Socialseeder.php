<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Seeder;

class Socialseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Social::create([
            "phone_num" => "01285443892",
            "address" => "4 Makram , Nasrcity , citycenter ",
            "gmail" => "mirag@gmail.com",
            "facebook" => "https://www.facebook/mirag434.com",
        ]);
    }
}
