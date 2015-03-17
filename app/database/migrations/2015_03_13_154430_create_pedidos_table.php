<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePedidosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pedidos', function($table)
        {
            $table->increments('id');

			$table->integer('user_id');
			$table->string('products_id');
			$table->integer('total_cost');
			$table->enum('estado', ['pendiente', 'canjeado', 'cancelado']);
            

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
		Schema::drop('pedidos');
	}

}
