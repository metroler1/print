<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreteTableStorageLocationCatridges extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('storage_location_catridges', function(Blueprint $table){
			$table->increments('id');
			$table->string('category_name');
			$table->integer('storage_id')->nullable();
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
		Schema::drop('storage_location_catridges');
    }
}
