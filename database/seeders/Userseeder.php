<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            "name"=> "omar ibrahim",
            "email" => "omar@gmail.com",
            "password" => Hash::make('123456'),
            "role_id" => 1,
        ]);
    }
}
