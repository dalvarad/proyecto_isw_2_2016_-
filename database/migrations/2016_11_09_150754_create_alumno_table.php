<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alumno', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre_alumno', 100);
			$table->string('apellido_paterno_alumno',100);
			$table->string('apellido_materno_alumno', 100);
			$table->date('fecha_nacimiento_alumno');

			$table->integer('relacion_material')->unsigned();
			$table->integer('relacion_curso')->unsigned();

			$table->foreign('relacion_material')
				->references('id')
				->on('material')
				->onDelete('cascade');

			$table->foreign('relacion_curso')
				->references('id')
				->on('curso')
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
		Schema::drop('alumno');
	}

}
