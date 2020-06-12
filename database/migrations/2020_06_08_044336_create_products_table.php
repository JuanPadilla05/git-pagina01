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
            $table->string('name');
            $table->string('brand');
            $table->string('model');
            $table->string('description');
            $table->integer('quantity');
            $table->decimal('price');
            $table->decimal('previous_price');
            $table->decimal('discount');
            $table->string('image');
            $table->string('availability');
            $table->integer('provider_id')->unsigned();
            $table->foreign('provider_id')->references('id')->on('users'); 
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories'); 
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
