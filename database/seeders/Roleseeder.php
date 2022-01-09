<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class Roleseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Role::create([
            "name" => "superadmin"
        ]);
        Role::create([
            "name" => "admin"
        ]);
    }
}
