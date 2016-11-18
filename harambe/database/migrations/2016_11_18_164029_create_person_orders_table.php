<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('person_orders', function (Blueprint $table) {
            $table->string('person_order_id');
            $table->string('order_id')->unique()
            $table->string('food_id');
            $table->string('drink_id');
            $table->timestamps();

            $table->primary('person_order_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_orders');
    }
}
