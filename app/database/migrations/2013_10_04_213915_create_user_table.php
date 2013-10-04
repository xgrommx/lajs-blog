<?php

use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('usr_user', function($table) {
			$table->string('id', 36);
			$table->primary('id');

			$table->string('login', 100);
			$table->unique('login');

			$table->string('salt', 36);
			$table->string('password', 250);
			$table->boolean('active');

			$table->timestamp('create_date');

			$table->string('created_by', 36)->nullable();
			$table->foreign('created_by')->references('id')->on('usr_user')->onDelete('set null')->onUpdate('cascade');

			$table->timestamp('update_date')->nullable();

			$table->string('updated_by')->nullable();
			$table->foreign('updated_by')->references('id')->on('usr_user')->onDelete('set null')->onUpdate('cascade');

			$table->integer('update_no')->default(0);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		\Schema::drop('usr_user');
	}

}