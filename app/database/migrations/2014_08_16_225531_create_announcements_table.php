<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnnouncementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('announcements', function($table)
        {
            $table->increments('id');
            $table->string('title', 100)->nullable(false);
            $table->text('content')->nullable(false);
            $table->string('content_url')->default('http://dev.photo-booth/');
            $table->date('date')->default('0000-00-00');
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
        Schema::drop('announcements');
	}

}
