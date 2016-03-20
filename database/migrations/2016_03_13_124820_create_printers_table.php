<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePrintersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printers', function(Blueprint $table){
			$table->increments('id');
			$table->integer('current_id');
			$table->string('manifacture');
			$table->string('model');
			$table->string('type', 10);
			$table->string('place');
			$table->integer('catridge_has')->nullable();
			$table->string('master', 100);
			$table->text('auxiliary')->nullable();
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
		Schema::drop('printers');
    }
}
