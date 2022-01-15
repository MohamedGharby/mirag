<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Investment;
use App\Models\InvestmentImg;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Company::factory()->has(Investment::factory()->
        has(InvestmentImg::factory()->count(4))->
        count(12))->count(5)->create();
    }
}
