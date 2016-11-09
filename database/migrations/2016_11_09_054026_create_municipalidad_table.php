<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMunicipalidadTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municipalidad', function(Blueprint $table)
		{
			$table->increments('id_municipalidad');
			$table->string('nombre_municipalidad',255);
			$table->string('ciudad_municipalidad',100);
			$table->string('direccion_municipalidad',255);
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
		Schema::drop('municipalidad');
	}

}
