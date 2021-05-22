<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;


class CreateSalePricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sale_prices', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            // $table->foreign('product_id')->references('product_id')->on('products')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTimeTz('sale_price_date_import');
            $table->dateTimeTz('sale_price_date_start');
            /**
             *  Khi sản phẩm có 2 bảng giá trở lên sẽ lấy ngày nằm trong khoẳng của date_start và date_end
             *  Khi tạo ra 2 bảng giá thì khoảng thời gian sẽ không được giao với nhau, nếu giao nhau sẽ báo lỗi
             *  Không được để date_start nhỏ hơn ngày hiện tại khi tạo mới `
             *
             *  Khi ta thêm trường giá mới trùng với cả sản phẩm thì
             *  Date_start của product mới sẽ là date_end của product cũ
             *
             */

            $table->dateTimeTz('sale_price_date_end')->nullable()->default(null);
            $table->integer('sale_price_amount')->default(0);
            $table->integer('sale_price_values')->default(20000);
            $table->smallInteger('sale_price_is_disable')->default(0);
            $table->timestamps();
        });
        // DB::statement('ALTER TABLE sale_prices ADD CONSTRAINT check_price_date_start CHECK (sale_price_date_start >= NOW())');
        // DB::statement('ALTER TABLE sale_prices ADD CONSTRAINT check_price_date CHECK (sale_price_date_start <= sale_price_date_end)');
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sale_prices');
    }
}
