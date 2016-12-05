<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->timestamps();
            $table->string('order_id');
            $table->string('date');
            $table->string('time');
            $table->string('ref_person_id');
            $table->string('ref_cart_id');
            $table->string('ref_table_id');

            $table->foreign('id')
                ->references('id')->on('shopping_carts')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
