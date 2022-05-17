<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {DB::table('customers')->insert([
        'id' => random_int(13000, 20000),
        'name' => Str::random(20),
        'email' => Str::random(10). 'gmail.com',
        //'password' => Hash::make('password'),
    ]);
    }
}
