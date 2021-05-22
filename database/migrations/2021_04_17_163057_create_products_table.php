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
            $table->integer('categories_id');
            // $table->foreign('categories_id')->references('categories_id')->on('categories')->onUpdate('cascade')->onDelete('cascade');
            $table->string('product_name',200);
            $table->string('product_slug')->default('ten-san-pham');
            $table->text('product_description');
            $table->string('product_image')->default('ten-san-pham');
            $table->string('product_unit');
            // 0 là vừa - 1 là lớn
            $table->integer('product_size')->default(0);
            $table->integer('product_amout_imports')->default(0);
            $table->integer('product_amout_sales')->default(0);
            $table->smallInteger('product_is_disable')->default(0);
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
