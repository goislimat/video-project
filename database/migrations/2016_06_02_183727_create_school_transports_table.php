<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolTransportsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('school_transports', function(Blueprint $table) {
			$table->integer('job_id')->unsigned();
			$table->foreign('job_id')->references('id')->on('jobs')->onDelete('cascade');
			$table->string('school');
			$table->date('started_at');
			$table->time('class_start_at');
			$table->time('class_finish_at')->nullable();
			$table->integer('monthly_payment');
			$table->date('leaved_at')->nullable();

            $table->timestamps();
			$table->primary(['job_id']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('school_transports');
	}

}
