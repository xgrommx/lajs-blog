<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostCategoryTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('pst_categories', function($table) {
			$table->string('post_id', 36)->references('id')->on('pst_post')->onDelete('cascade')->onUpdate('cascade');
			$table->string('category_id', 36)->references('id')->on('pst_category')->onDelete('cascade')->onUpdate('cascade');

			$table->primary(array('post_id', 'category_id'));
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		\Schema::drop('pst_categories');
	}

}