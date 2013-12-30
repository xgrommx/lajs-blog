<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('pst_post', function($table) {
			$table->string('id', 36);
			$table->primary('id');

			$table->string('title', 200);
			$table->text('body')->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		\Schema::drop('pst_post');
	}

}