<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            // $table->unsignedBigInteger('container_id');
            // $table->unsignedBigInteger('truck_id');
            // ->nullable();
            $table->string('title');
            $table->string('category');
            $table->integer('weight');
            $table->string('size');
            $table->string('manufacturer');
            // $table->foreign('container_id')->references('id')->on('container');
            // $table->foreign('truck_id')->references('id')->on('truck');
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
        Schema::dropIfExists('product');
    }
};
