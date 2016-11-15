<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMealEntryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('meal_entry', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('self_meal_breakfast');
            $table->integer('self_meal_lunch');
            $table->integer('self_meal_dinner');
            $table->integer('guest_meal_breakfast');
            $table->integer('guest_meal_lunch');
            $table->integer('guest_meal_dinner');
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
        Schema::drop('meal_entry');
    }
}
