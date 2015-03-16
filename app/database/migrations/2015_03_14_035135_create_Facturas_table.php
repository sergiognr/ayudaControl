<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacturasTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('facturas2', function(Blueprint $table) {

            $table->increments('id');
            $table->string('cac');
            $table->date('fecha');
            $table->integer('pc');
            $table->integer('costoPc');
            $table->integer('certificadora');
            $table->integer('costoCertificadora');
            $table->integer('impMatricial');
            $table->integer('costoImpMatricial');
            $table->integer('impHp');
            $table->integer('costoImpHp');
            $table->integer('ups');
            $table->integer('costoUps');
            $table->integer('total');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('Facturas');
    }

}
