<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEscuelaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('escuela', function(Blueprint $table)
		{
			$table->increments('id');

			$table->string('nombre_escuela',200);
			$table->string('direccion_escuela',200);

			$table->integer('id_escuela_municipal')->unsigned();

			$table->foreign('id_escuela_municipal')
				->references('id_municipalidad')
				->on('municipalidad')
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
		Schema::drop('escuela');
	}

}
