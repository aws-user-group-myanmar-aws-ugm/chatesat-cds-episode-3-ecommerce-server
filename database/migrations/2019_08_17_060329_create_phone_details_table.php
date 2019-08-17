<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhoneDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phone_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('phone_id');
            $table->string('released');
            $table->string('chipset');
            $table->string('cpu');
            $table->string('fcamera');
            $table->string('rcamera');
            $table->string('resolution');
            $table->string('gpu');
            $table->string('os');
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
        Schema::dropIfExists('phone_details');
    }
}
