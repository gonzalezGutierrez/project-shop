<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUbicacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ubicaciones', function (Blueprint $table) {
            $table->increments('id');
            $table->double('latitud')->nullable();
            $table->double('longitud')->nullable();
            $table->boolean('gps')->default(false);
            $table->string('estado');
            $table->string('municipio');
            $table->string('calle_numero');
            $table->string('colonia');
            $table->string('codigo_postal',5);
            $table->string('telefono',10);
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
        Schema::dropIfExists('ubicacions');
    }
}
