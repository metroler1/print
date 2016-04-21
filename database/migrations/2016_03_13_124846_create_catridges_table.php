<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCatridgesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('catridges', function(Blueprint $table){
			$table->increments('id');
			$table->integer('current_id')->unique();
			$table->string('manifacture');
			$table->string('model', 100);
			$table->string('type', 10);
			$table->string('location', 100)->nullable();
			$table->string('master', 100);
			$table->text('auxiliary')->nullable();
			$table->boolean('notice')->default(0);
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
		Schema::drop('catridges');
    }
}
