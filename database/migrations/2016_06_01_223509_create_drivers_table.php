<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDriversTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drivers', function(Blueprint $table) {
            $table->increments('id');

			$table->string('name');
			$table->string('rg');
			$table->string('cpf');
			$table->integer('salary')->nullable();
			$table->string('email')->nullable();
			$table->string('phone');
			$table->date('registration_date');
			$table->date('leaving_date')->nullable();

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
		Schema::drop('drivers');
	}

}
