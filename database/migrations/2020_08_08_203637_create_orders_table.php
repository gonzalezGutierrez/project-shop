<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code_order')->unique();
            $table->integer('carrito_id')->unsigned();
            $table->foreign('carrito_id')->references('id')->on('shopping_carts');
            $table->double('total');
            $table->boolean('facturar')->default(false);
            $table->enum('estatus',['pagada','enviada','entregada'])->default('pagada');
            $table->integer('transaccion_id')->unsigned();
            $table->foreign('transaccion_id')->references('id')->on('transactions');
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
        Schema::dropIfExists('orders');
    }
}
