<?php

use Illuminate\Database\Seeder;
use App\Table;

class TableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = new Table([
            'tableID' => '1OBBCcTcMg2koe0d',
            'number' => 1,
            'description' => 'Sitt for deg selv og nyt en god middag med god havutsikt.',
            'capacity' => 1
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'Ie4QPP6kk3kXYWJp',
            'number' => 2,
            'description' => 'Ta med deg noen, og sitt ved et av våre to personers bord.',
            'capacity' => 2
        ]);
        $table->save();
        $table = new Table([
            'tableID' => '3oFg2ruwtGeRYlHF',
            'number' => 3,
            'description' => 'Vårt fire personers bord ligger ved vinduet, slik at dere kan nyte utsikten.',
            'capacity' => 4
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'qV5eXz7fsfEYFTVh',
            'number' => 4,
            'description' => 'Et av våre flotteste bord helt ved vinduet.',
            'capacity' => 3
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'CVkqSEGbY3yvfuie',
            'number' => 5,
            'description' => 'Det største bordet vi kan tilby som er avskildt fra andre bord.',
            'capacity' => 6
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'DnAqWvTRF83AVbPD',
            'number' => 6,
            'description' => 'Vårt V.I.P bord ligger ved vinduet og er helt ved inngangen',
            'capacity' => 3
        ]);
        $table->save();
    }
}