<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RolUsuarioMigration extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rol_usuario', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->bigInteger('rol_id')->unsigned();
			$table->foreign('rol_id')->references('id')->on('roles');
			$table->bigInteger('usuario_id')->unsigned();
			$table->foreign('usuario_id')->references('id')->on('usuarios');
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
		Schema::dropIfExists('rol_usuario');
	}
}
