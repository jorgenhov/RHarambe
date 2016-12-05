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
        $Food = new Food([
            'food_id' => 'nFZrwQHWTdaALAXv',
            'imagePath' => 'img/hamburger.jpg',
            'name' => '#1 Harambe Burger',
            'description' => 'Den mest mongo burgeren <br /> på markedet!',
            'price' => 80,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => '9z6JKbg5jRd8pVeg',
            'imagePath' => 'img/kebab.jpg',
            'name' => '#2 Harambe Kebab',
            'description' => 'Den fantastiske <br /> harambe kebaben med <br /> smak av fersk harambe kjøtt!',
            'price' => 75,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => 'bcQ69gd63Ep3dhpB',
            'imagePath' => 'img/taco.jpg',
            'name' => '#3 Taco',
            'description' => 'En taco rett <br /> med mange fyldige smaker <br />og har en helt unik <br /> touch over seg.',
            'price' => 40,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => 'oK1SlVcV4XGRg2Em',
            'imagePath' => 'img/spesial.jpg',
            'name' => '#4 Harambe Spesial',
            'description' => 'Vår favoritt rett. <br /> Kommer med smaksgaranti.',
            'price' => 90,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => 'jOvxqqlGYYjj2qiQ',
            'imagePath' => 'img/nudler.jpg',
            'name' => '#5 Harambe Nudler',
            'description' => 'Stekte nudler med <br />grønnsaker og harambe.',
            'price' => 45,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => 'jkiWQBz3drPOLaMx',
            'imagePath' => 'img/salat.jpg',
            'name' => '#6 Harambe Salat',
            'description' => 'Salat med tomat, oliven, <br /> agurk og harambe.',
            'price' => 45,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => 'D3dXHFdvI99apOBW',
            'imagePath' => 'img/pizza.jpg',
            'name' => '#7 Harambe Pizza',
            'description' => ' Pizza med paprika, <br /> tomat og den spesielle <br />harambe pepperonien.',
            'price' => 120,
        ]);
        $Food->save();
        $Food = new Food([
            'food_id' => '5czYkZChoPD04Vt4',
            'imagePath' => 'img/spaghetti.jpg',
            'name' => '#8 Harambe Bolognese',
            'description' => 'Spaghetti, tomatsaus <br /> og harambe kjøttdeig.',
            'price' => 70,
        ]);
        $Food->save();
    }
}
