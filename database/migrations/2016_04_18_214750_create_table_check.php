<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('check', function(Blueprint $table){
			$table->increments('id');
			$table->string('catridge_model');
			$table->integer('price');
			$table->string('master', 25);
			$table->integer('influence')->nullable();

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
		Schema::drop('check');
    }
}
