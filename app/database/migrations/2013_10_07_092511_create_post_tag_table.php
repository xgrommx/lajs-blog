<?php

use Illuminate\Database\Migrations\Migration;

class CreatePostTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		\Schema::create('pst_tags', function($table) {
			$table->string('post_id', 36)->references('id')->on('pst_post')->onDelete('cascade')->onUpdate('cascade');
			$table->string('tag_id')->references('id')->on('pst_category')->onDelete('cascade')->onUpdate('cascade');

			$table->primary(array('post_id', 'tag_id'));

			$table->timestamp('create_date');

			$table->string('created_by', 36);
			$table->foreign('created_by')->references('id')->on('usr_user')->onDelete('set null')->onUpdate('cascade');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		\Schema::drop('pst_tags');
	}

}