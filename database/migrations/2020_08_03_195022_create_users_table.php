<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',40);
            $table->string('apellido',40);
            $table->string('email')->unique();
            $table->string('password');
            $table->string('telefono',10)->nullable();
            $table->enum('estatus',['inactivo','eliminado','activo','baneado'])->default('inactivo');
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('roles');
            $table->integer('ubication_id')->unsigned()->nullable();
            $table->foreign('ubication_id')->references('id')->on('ubicaciones');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
