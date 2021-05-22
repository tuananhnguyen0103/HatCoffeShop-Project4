<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->dateTimeTz('bills_sale_day');
            $table->dateTimeTz('bill_pay_day')->nullable();
            $table->string('bill_descriptions');
            $table->string('bill_state');
            $table->integer('staff_set_bill_accepted')->nullable();
            $table->integer('staff_set_bill_ship')->nullable();
            $table->integer('staff_set_bill_shipping')->nullable();
            $table->integer('staff_set_bill_done')->nullable();
            $table->integer('staff_set_bill_cancel')->nullable();
            $table->integer('bill_staff_id')->nullable();
            $table->integer('bill_total');
            $table->integer('bill_custormer_id');
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
        Schema::dropIfExists('bills');
    }
}
