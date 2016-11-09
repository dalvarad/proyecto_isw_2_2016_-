<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuario', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('rut_usuario', 12);
			$table->string('nombre_usuario', 50);
			$table->string('apellido_usuario, 50');
			$table->date('fecha_nacimiento');

			$table->integer('id_escuela_usuario')->unsigned();

			$table->foreign('id_escuela_usuario')
				->references('id')
				->on('escuela')
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
		Schema::drop('usuario');
	}

}
