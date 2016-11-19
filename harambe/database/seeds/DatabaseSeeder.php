<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        	$this->call(TableTablesSeeder::class);
        	$this->call(FoodTableSeeder::class);
        	$this->call(DrinkTableSeeder::class);
    }
}
