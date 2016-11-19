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
            'dishID' => 'nFZrwQHWTdaALAXv',
            'imagePath' => 'img/hamburger.jpg',
            'name' => '#1 Harambe Burger',
            'price' => 80,
            'description' => 'Den mest mongo burgeren <br /> på markedet!',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => '9z6JKbg5jRd8pVeg',
            'imagePath' => 'img/kebab.jpg',
            'name' => '#2 Harambe Kebab',
            'price' => 75,
            'description' => 'Den fantastiske <br /> harambe kebaben med <br /> smak av fersk harambe kjøtt!',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => 'bcQ69gd63Ep3dhpB',
            'imagePath' => 'img/taco.jpg',
            'name' => '#3 Taco',
            'price' => 40,
            'description' => 'En taco rett <br /> med mange fyldige smaker <br />og har en helt unik <br /> touch over seg.',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => 'oK1SlVcV4XGRg2Em',
            'imagePath' => 'img/spesial.jpg',
            'name' => '#4 Harambe Spesial',
            'price' => 90,
            'description' => 'Vår favoritt rett. <br /> Kommer med smaksgaranti.',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => 'jOvxqqlGYYjj2qiQ',
            'imagePath' => 'img/nudler.jpg',
            'name' => '#5 Harambe Nudler',
            'price' => 45,
            'description' => 'Stekte nudler med <br />grønnsaker og harambe.',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => 'jkiWQBz3drPOLaMx',
            'imagePath' => 'img/salat.jpg',
            'name' => '#6 Harambe Salat',
            'price' => 45,
            'description' => 'Salat med tomat, oliven, <br /> agurk og harambe.',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => 'D3dXHFdvI99apOBW',
            'imagePath' => 'img/pizza.jpg',
            'name' => '#7 Harambe Pizza',
            'price' => 120,
            'description' => ' Pizza med paprika, <br /> tomat og den spesielle <br />harambe pepperonien.',
        ]);
        $dish->save();
        $dish = new Food([
            'dishID' => '5czYkZChoPD04Vt4',
            'imagePath' => 'img/spaghetti.jpg',
            'name' => '#8 Harambe Bolognese',
            'price' => 70,
            'description' => 'Spaghetti, tomatsaus <br /> og harambe kjøttdeig.',
        ]);
        $dish->save();    }
}
