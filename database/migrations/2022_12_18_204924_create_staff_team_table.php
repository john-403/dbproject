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
        Schema::create('staff_team', function (Blueprint $table) {
            $table->unsignedBigInteger('staff_id');
            $table->unsignedBigInteger('team_id');
            $table->foreign('staff_id')->references('id')->on('staff')->onDelete('cascade');
            $table->foreign('team_id')->references('id')->on('team')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staff_team');
    }
};
