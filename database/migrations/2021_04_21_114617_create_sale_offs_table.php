<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateSaleOffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_offs', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            // $table->foreign('product_id')->references('product_id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTimeTz('sale_off_date_import');
            $table->dateTimeTz('sale_off_date_start');
            $table->dateTimeTz('sale_off_date_end');
            $table->integer('sale_off_amout')->default(0);
            $table->smallInteger('sale_off_is_disable')->default(0);
            $table->integer('sale_offs_values')->default(20000);
            $table->timestamps();
        });
        // DB::statement('ALTER TABLE sale_offs ADD CONSTRAINT check_sale_offs_date_start CHECK (sale_off_date_start >= NOW()))');
        // DB::statement('ALTER TABLE sale_offs ADD CONSTRAINT check_sale_offs_date CHECK (sale_off_date_start < sale_off_date_end)');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_offs');
    }
}
