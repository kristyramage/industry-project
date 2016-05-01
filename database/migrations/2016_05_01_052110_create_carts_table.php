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

            $table->integer('print_id')->unsigned();
            $table->foreign('print_id')->references('id')->on('prints') // ->onDelete('cascade')->onUpdate('cascade');

            $table->enum('size', array('A5', 'A4', 'A3'))->default('A4'); // new table ??? price comes from the size
            $table->boolean('framed'); // new table ??? additional cost depends on size

            $table->smallInteger('quantity');
            $table->decimal('priceAtPurchase', 6, 2);
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
