<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;


class PrSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::table('prs')->insert([
        'pr_price' => random_int(5, 150),
        'pr_id' => random_int(01, 101),
        'description' => Str::random(20),
        //'email' => Str::random(10). 'gmail.com',
        //'password' => Hash::make('password'),
    ]);
    }
}
