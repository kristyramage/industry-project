<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrameSizeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frame_sizes', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('size', 8); 
            $table->decimal('size_price', 6, 2);
            $table->decimal('frame_weight_grams', 6, 2);
            $table->decimal('frame_hight_mm', 6, 2);
            $table->decimal('frame_width_mm', 6, 2);
            $table->decimal('frame_depth_mm', 6, 2);
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
