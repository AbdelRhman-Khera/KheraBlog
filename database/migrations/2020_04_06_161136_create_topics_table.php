<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('topics', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('image')->nullable();
			$table->text('title')->nullable();
			$table->text('content')->nullable();
			$table->integer('category_id')->nullable();
			$table->foreign('category_id')->references('id')->on('categories');

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('topics');
	}
}
