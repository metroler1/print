<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePaperCounters extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paper_counters', function(Blueprint $table){
            $table->increments('id');
            $table->string('device_name');
            $table->string('number_of');
            $table->integer('influence')->nullable();
            $table->boolean('notice')->nullable();
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
        Schema::drop('paper_counters');
    }
}






