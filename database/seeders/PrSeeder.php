<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pr;

class PrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pr::factory()->count(12)->create();
    }
}
