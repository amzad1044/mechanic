<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHiredlaboursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hiredlabours', function (Blueprint $table) {
            $table->id();
            $table->string('mech_id');
            $table->string('cust_id');
            $table->string('cust_name');
            $table->string('cust_email');
            $table->string('cust_phone');
            $table->tinyInteger('status')->default('0');
            $table->tinyInteger('seen')->default('0');
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
        Schema::dropIfExists('hiredlabours');
    }
}
