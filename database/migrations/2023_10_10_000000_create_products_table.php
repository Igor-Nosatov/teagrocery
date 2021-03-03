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
            $table->id();
            $table->string('name');
            $table->string('title')->nullable();
            $table->string('code');
            $table->float('price', 8, 2);
            $table->string('img');
            $table->text('description')->nullable();
            $table->string('slug')->nullable();

            $table->unsignedBigInteger('type_id');
            $table->foreign('type_id')
              ->references('id')->on('types')
              ->onDelete('cascade');

            $table->unsignedBigInteger('brand_id');
            $table->foreign('brand_id')
              ->references('id')->on('brands')
              ->onDelete('cascade');

            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')
              ->references('id')->on('categories')
              ->onDelete('cascade');

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
