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
        Schema::create('dock_ship', function (Blueprint $table) {
            $table->unsignedBigInteger('dock_id');
            $table->unsignedBigInteger('ship_id');
            $table->foreign('dock_id')->references('id')->on('dock')->onDelete('cascade');
            $table->foreign('ship_id')->references('id')->on('ship')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dock_ship');
    }
};
