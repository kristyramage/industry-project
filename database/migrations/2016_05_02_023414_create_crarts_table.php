<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCrartsTable extends Migration
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
            $table->string('session_id');

            $table->integer('print_id')->unsigned();
            $table->foreign('print_id')->references('id')->onUpdate('prints')->onDelete('cascade');

            $table->integer('size_id')->unsigned();
            $table->foreign('size_id')->references('id')->onUpdate('print_sizes')->onDelete('cascade');

            $table->integer('frame_id')->unsigned();
            $table->foreign('frame_id')->references('id')->onUpdate('frame_sizes')->onDelete('cascade');

            $table->smallInteger('quantity');
            $table->decimal('single_price', 6, 2); 
            $table->decimal('subtotal', 6, 2); 
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
