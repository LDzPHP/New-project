<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        /*$this->call([
            SalesSeeder::class,
            PrintsSeeder::class,
            CustomersSeeder::class,
        ]);*/
    $this->call(PrSeeder::class);
    $this->call(CustomerSeeder::class); 
    $this->call(SaleSeeder::class); 
    }
}