<?php

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
            $table->increments('id')->unsigned();

            $table->integer('cart_id')->unsigned();
            $table->foreign('cart_id')->references('id')->on('carts')->onUpdate('cascade')->onDelete('cascade');

            $table->string('cart_session_id');

            $table->integer('shipping_id')->unsigned();
            $table->foreign('shipping_id')->references('id')->on('shipping')->onUpdate('cascade')->onDelete('cascade');

            $table->decimal('grand_total', 6, 2); 

            $table->enum('status', array('refunded','shipped','approved','expired','declined','timeout','pending'))->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
