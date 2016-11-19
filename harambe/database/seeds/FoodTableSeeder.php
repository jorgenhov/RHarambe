<?php

use Illuminate\Database\Seeder;
use App\Food;

class FoodTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dish = new Food([
            'food_id' => 'nFZrwQHWTdaALAXv',
            'imagePath' => 'img/hamburger.jpg',
            'name' => '#1 Harambe Burger',
            'price' => 80,
            'description' => utf8_encode('Den mest mongo burgeren <br /> på markedet!'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => '9z6JKbg5jRd8pVeg',
            'imagePath' => 'img/kebab.jpg',
            'name' => '#2 Harambe Kebab',
            'price' => 75,
            'description' => utf8_encode('Den fantastiske <br /> harambe kebaben med <br /> smak av fersk harambe kjøtt!'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => 'bcQ69gd63Ep3dhpB',
            'imagePath' => 'img/taco.jpg',
            'name' => '#3 Taco',
            'price' => 40,
            'description' => utf8_encode('En taco rett <br /> med mange fyldige smaker <br />og har en helt unik <br /> touch over seg.'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => 'oK1SlVcV4XGRg2Em',
            'imagePath' => 'img/spesial.jpg',
            'name' => '#4 Harambe Spesial',
            'price' => 90,
            'description' => utf8_encode('Vår favoritt rett. <br /> Kommer med smaksgaranti.'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => 'jOvxqqlGYYjj2qiQ',
            'imagePath' => 'img/nudler.jpg',
            'name' => '#5 Harambe Nudler',
            'price' => 45,
            'description' => utf8_encode('Stekte nudler med <br />grønnsaker og harambe.'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => 'jkiWQBz3drPOLaMx',
            'imagePath' => 'img/salat.jpg',
            'name' => '#6 Harambe Salat',
            'price' => 45,
            'description' => utf8_encode('Salat med tomat, oliven, <br /> agurk og harambe.'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => 'D3dXHFdvI99apOBW',
            'imagePath' => 'img/pizza.jpg',
            'name' => '#7 Harambe Pizza',
            'price' => 120,
            'description' => utf8_encode(' Pizza med paprika, <br /> tomat og den spesielle <br />harambe pepperonien.'),
        ]);
        $dish->save();
        $dish = new Food([
            'food_id' => '5czYkZChoPD04Vt4',
            'imagePath' => 'img/spaghetti.jpg',
            'name' => '#8 Harambe Bolognese',
            'price' => 70,
            'description' => utf8_encode('Spaghetti, tomatsaus <br /> og harambe kjøttdeig.'),
        ]);
        $dish->save();    
    }
}
