<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('pst_category', function($table) {
			$table->string('id', 36);
			$table->primary('id');

			$table->string('name', 100);

			$table->string('parent_id', 36)->nullable();
			$table->foreign('parent_id')->references('id')->on('pst_category')->onDelete('cascade')->onUpdate('cascade');

			$table->timestamp('create_date');

			$table->string('created_by', 36);
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
		\Schema::drop('pst_category');
	}

}