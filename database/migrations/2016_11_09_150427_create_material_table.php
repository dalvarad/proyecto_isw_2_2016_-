<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('material', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre_material', 200);

			$table->integer('material_usuario')->unsigned();

			$table->foreign('material_usuario')
				->references('id')
				->on('usuario')
				->onDelete('cascade');

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
		Schema::drop('material');
	}

}
