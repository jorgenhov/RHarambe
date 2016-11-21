<?php

use Illuminate\Database\Seeder;
use App\Drink;

class DrinkTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $drink = new Drink([
            'drinkID' => 'tnRjmUcuReAaPMgI',
            'imagePath' => '',
            'name' => 'Coca Cola',
            'price' => 45
        ]);
        $drink->save();
        $drink = new Drink([
            'drinkID' => '4no0POs7N9c7VwIG',
            'imagePath' => '',
            'name' => 'Fanta',
            'price' => 40
        ]);
        $drink->save();
        $drink = new Drink([
            'drinkID' => '6HyFo0wi4RAvisYw',
            'imagePath' => '',
            'name' => 'Sprite',
            'price' => 30
        ]);
        $drink->save();
        $drink = new Drink([
            'drinkID' => 'll4G9rBtYpmXsLEa',
            'imagePath' => '',
            'name' => 'Pepsi',
            'price' => 45
        ]);
    }
}