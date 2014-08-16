<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicePackagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('service_packages', function($table)
        {
            $table->increments('id');
            $table->integer('service_id');
            $table->string('name', 150);
            $table->string('image', 100);
            $table->decimal('price', 8, 2);
            $table->string('status', 50);
            $table->text('details');
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
        Schema::drop('service_packages');
	}

}
