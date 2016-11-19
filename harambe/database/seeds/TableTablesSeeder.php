<?php

use Illuminate\Database\Seeder;

class TableTablesSeeder extends Seeder
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
            'name' => 1,
            'capacity' => 1,
            'description' => 'Sitt for deg selv og nyt en god middag med god havutsikt.',
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'Ie4QPP6kk3kXYWJp',
            'name' => 2,
            'capacity' => 2,
            'description' => 'Ta med deg noen, og sitt ved et av våre to personers bord.',
        ]);
        $table->save();
        $table = new Table([
            'tableID' => '3oFg2ruwtGeRYlHF',
            'name' => 3,
            'capacity' => 4,
            'description' => 'Vårt fire personers bord ligger ved vinduet, slik at dere kan nyte utsikten.',
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'qV5eXz7fsfEYFTVh',
            'name' => 4,
            'capacity' => 3,
            'description' => 'Et av våre flotteste bord helt ved vinduet.',
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'CVkqSEGbY3yvfuie',
            'name' => 5,
            'capacity' => 6,
            'description' => 'Det største bordet vi kan tilby som er avskildt fra andre bord.',
        ]);
        $table->save();
        $table = new Table([
            'tableID' => 'DnAqWvTRF83AVbPD',
            'name' => 6,
            'capacity' => 3,
            'description' => 'Vårt V.I.P bord ligger ved vinduet og er helt ved inngangen',
        ]);
        $table->save();
    }
}
