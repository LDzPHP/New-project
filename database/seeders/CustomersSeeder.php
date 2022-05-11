<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Customers;

class CustomersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        Customers::factory()->count(12)->create();
    }
}
