<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('staff_name');
            $table->integer('staff_types_id');
            // $table->foreign('staff_types_id')->references('staff_types_id')->on('staff_types')->onUpdate('cascade')->onDelete('cascade');
            $table->string('staff_image');
            $table->string('staff_sex');
            $table->date('staff_birthday');
            $table->date('staff_date_join');
            $table->string('staff_address',400);
            $table->string('staff_account');
            $table->string('staff_password');
            $table->string('staff_role');
            $table->string('staff_phone_number',15);
            $table->string('staff_email');
            $table->smallInteger('staff_is_disable')->default(0);
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
        Schema::dropIfExists('staff');
    }
}
