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
        Schema::create('client_truck', function (Blueprint $table) {
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('truck_id');
            $table->foreign('client_id')->references('id')->on('client')->onDelete('cascade');
            $table->foreign('truck_id')->references('id')->on('truck')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_truck');
    }
};
