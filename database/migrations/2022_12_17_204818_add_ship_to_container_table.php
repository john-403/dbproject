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
        Schema::table('container', function (Blueprint $table) {
            $table->unsignedBigInteger('ship_id')->nullable();
            $table->foreign('ship_id')->references('id')->on('ship')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('container', function (Blueprint $table) {
            // Schema::dropColumn('ship_id');
            $table->dropForeign(['ship_id']);
            $table->dropColumn('ship_id');
        });
    }
};
