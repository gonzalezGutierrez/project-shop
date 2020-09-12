<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopping_cart_ubication', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrito_id')->unsigned();
            $table->integer('ubicacion_id')->unsigned();
            $table->foreign('carrito_id')->references('id')->on('shopping_carts');
            $table->foreign('ubicacion_id')->references('id')->on('ubicaciones');
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
        Schema::dropIfExists('shopping_cart_ubication');
    }
}
