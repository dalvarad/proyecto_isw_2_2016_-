<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('curso', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre_curso', 60);
			$table->smallInteger('cantidad_alumnos');

			$table->integer('id_curso_usuario')->unsigned();

			$table->foreign('id_curso_usuario')
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
		Schema::drop('curso');
	}

}
