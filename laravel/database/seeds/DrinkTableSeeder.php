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
            'imagePath' => '',
            'name' => 'Coca Cola',
            'price' => 45
        ]);
        $drink->save();
        $drink = new Drink([
            'imagePath' => '',
            'name' => 'Fanta',
            'price' => 40
        ]);
        $drink->save();
        $drink = new Drink([
            'imagePath' => '',
            'name' => 'Sprite',
            'price' => 30
        ]);
        $drink->save();
        $drink = new Drink([
            'imagePath' => '',
            'name' => 'Pepsi',
            'price' => 45
        ]);
        $drink->save();
    }
}
