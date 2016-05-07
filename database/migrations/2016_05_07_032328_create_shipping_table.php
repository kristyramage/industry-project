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
            $table->string('session_id');

            $table->string('name', 60);
            $table->string('email', 255);
            $table->string('phone', 20);
            $table->string('message', 500);
            
            $table->string('country', 60);
            $table->string('state', 60);
            $table->string('city', 60);
            $table->string('street', 60);
            $table->string('postcode', 4);

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
