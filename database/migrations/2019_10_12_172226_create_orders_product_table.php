<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersProductTable extends Migration
{
    public function up()
    {
        Schema::create('orders_product', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('tax');
			$table->integer('total');
			$table->integer('product_id');
			$table->integer('orders_id');
			$table->integer('qty');
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
        Schema::dropIfExists('orders_product');
    }
}
