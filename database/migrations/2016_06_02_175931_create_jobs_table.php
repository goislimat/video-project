<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table) {
            $table->increments('id');

			$table->integer('driver_id')->unsigned()->index();
			$table->foreign('driver_id')->references('id')->on('drivers');
			$table->integer('customer_id')->unsigned()->index();
			$table->foreign('customer_id')->references('id')->on('customers');
			$table->smallInteger('type');
			$table->date('last_payment')->nullable();

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
		Schema::drop('jobs');
	}

}
