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
        $this->call([
            SaleSeeder::class,
            PrSeeder::class,
            CustomerSeeder::class,
        ]);
    /*$this->call(PrSeeder::class);
    $this->call(CustomersSeeder::class); 
    $this->call(SaleSeeder::class);*/
    }
}