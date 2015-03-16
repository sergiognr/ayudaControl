<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTablaUpssTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tablaUpss', function(Blueprint $table)
		{
			$table->increments('id');
                        $table->string('cacOrigen');
                        $table->string('modeloYmarca');
                        $table->string('potenciaYserial');
                        $table->date('fechaDeInstalacion'); 
                      
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
		Schema::drop('tablaUpss');
	}

}
