<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PrintsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prints', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('price', 6, 2);
            $table->string('descrition');
            $table->string('poster')->nullable();
            $table->enum('size', array('A5', 'A4', 'A3', 'A2'))->default('A4');
            $table->decimal('width', 6, 2);
            $table->decimal('height', 6, 2);
            $table->decimal('weight', 6, 2);
            $table->smallInteger('quantity')->default('0');
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
        Schema::drop('prints');
    }
}
