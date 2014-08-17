<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('reservations', function($table)
        {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 100);
            $table->string('contact_number', 20);
            $table->integer('package_id');
            $table->date('date')->default('0000-00-00');
            $table->text('message');
            $table->integer('status_id');
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
        Schema::drop('reservations');
	}

}
