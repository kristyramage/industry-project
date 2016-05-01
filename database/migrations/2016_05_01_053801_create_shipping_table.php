<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShippingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('name', 60);

            $table->integer('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders') // ->onDelete('cascade')->onUpdate('cascade');
            
            $table->string('country', 60);
            $table->string('state', 60);
            $table->string('city', 60);
            $table->string('suburb', 60);
            $table->string('street', 60);
            $table->string('phone', 20);
            $table->string('email', 255);
            $table->enum('role', array('refunded','shipped','approved','expired','declined','timeout','pending'))->default('pending');
            $table->timestamps();
        };
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
