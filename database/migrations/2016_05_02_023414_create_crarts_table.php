<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('session_id');

            $table->integer('print_id')->unsigned();
            $table->foreign('print_id')->references('id')->on('prints')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('size_id')->unsigned();
            $table->foreign('size_id')->references('id')->on('print_sizes')->onDelete('cascade')->onUpdate('cascade');

            $table->integer('frame_id')->unsigned();
            $table->foreign('frame_id')->references('id')->on('frames_sizes')->onDelete('cascade')->onUpdate('cascade');

            $table->smallInteger('quantity');
            $table->decimal('subtotal', 6, 2); 
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
