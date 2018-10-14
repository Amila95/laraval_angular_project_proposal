<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatQuoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quotes',function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('type');
			$table->string('nation');
			$table->string('religion');
			$table->string('district');
			$table->string('kulaya');
			$table->integer('age');
			$table->timestamps();
			$table->text('discription');
			

		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('quotes');
    }
}
