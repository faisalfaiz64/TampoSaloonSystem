<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ConformOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conform_orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('admin_id');
            $table->integer('prodId');
            $table->string('name');
            $table->string('email');
            $table->string('phone_no');
            $table->string('address');
            $table->string('amount');
            $table->string('Delivery_status');
            $table->integer('feedback')->default(0);
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
         Schema::dropIfExists('conform_orders');
    }
}
