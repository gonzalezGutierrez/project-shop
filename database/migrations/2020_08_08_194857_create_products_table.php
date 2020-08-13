<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('slug');
            $table->string('SKU')->unique();
            $table->double('precio_venta')->default(0.0);
            $table->integer('existencia')->default(0);
            $table->string('url_imagen_principal')->nullable();
            $table->text('caracteristicas')->nullable();
            $table->text('descripcion')->nullable();
            $table->text('especificaciones')->nullable();
            $table->text('uso')->nullable();
            $table->integer('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categories');
            $table->integer('marca_id')->unsigned();
            $table->foreign('marca_id')->references('id')->on('brands');
            $table->enum('estatus',['activo','inactivo','eliminado'])->default('inactivo');
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
        Schema::dropIfExists('products');
    }
}
