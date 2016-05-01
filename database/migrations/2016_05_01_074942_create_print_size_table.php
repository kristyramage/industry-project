<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('print_sizes', function (Blueprint $table) {
            $table->increments('id')->unsigned();

            $table->enum('size', array('A5', 'A4', 'A3', 'A2')); 
            $table->decimal('size_price', 6, 2);
            $table->decimal('paper_weight_grams', 6, 2);
            $table->decimal('paper_hight_mm', 6, 2);
            $table->decimal('paper_width_mm', 6, 2);

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
