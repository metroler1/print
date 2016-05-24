<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableDisplacement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('displacement', function(Blueprint $table){
			$table->increments('id');
			$table->string('catridge_current_id');
			$table->text('to_place');
			$table->integer('notice');
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
        Schema::drop('displacement');
    }
}
