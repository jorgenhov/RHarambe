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
        $this->call(DishTableSeeder::class);
        $this->call(DrinkTableSeeder::class);
        $this->call(TableTableSeeder::class);
    }
}
