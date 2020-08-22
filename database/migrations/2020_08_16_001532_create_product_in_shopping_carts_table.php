<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductInShoppingCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_in_shopping_carts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('carrito_id')->unsigned();
            $table->foreign('carrito_id')->references('id')->on('shopping_carts');
            $table->integer('cantidad')->default(1);
            $table->integer('producto_id')->unsigned();
            $table->foreign('producto_id')->references('id')->on('products');
            $table->double('subtotal');
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
        Schema::dropIfExists('product_in_shopping_carts');
    }
}
