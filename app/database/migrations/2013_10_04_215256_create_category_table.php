<?php

use Illuminate\Database\Migrations\Migration;

class CreateCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('pst_category', function(\Illuminate\Database\Schema\Blueprint $table) {
			$table->string('id', 36);
			$table->primary('id');

			$table->string('name', 100);

			$table->string('parent_id', 36)->nullable();
			$table->foreign('parent_id')->references('id')->on('pst_category')->onDelete('cascade')->onUpdate('cascade');
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