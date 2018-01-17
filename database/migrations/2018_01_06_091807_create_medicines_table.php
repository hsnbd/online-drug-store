<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->text('description');
            $table->integer("price",  $autoIncrement=false);
            $table->integer('stock',  $autoIncrement=false);
            $table->smallInteger("least_order",  $autoIncrement=false);
            $table->integer('supplier_id')->unsigned();
            $table->integer('sub_category_id')->unsigned();
            $table->integer('unit_id')->unsigned();
            $table->integer('generic_id')->unsigned();
            $table->integer('power_id')->unsigned();
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
        Schema::dropIfExists('medicines');
    }
}
