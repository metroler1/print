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
			$table->integer('catridge_current_id')->nullable();
			$table->integer('price');
			$table->string('type_of_repair', 25);
			$table->string('master', 25);
			$table->string('catridge_model')->nullable();
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
