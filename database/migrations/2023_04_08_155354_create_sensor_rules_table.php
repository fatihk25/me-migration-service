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
        Schema::create('sensor_rules', function (Blueprint $table) {
            $table->id();
            $table->string('file')->nullable();
            $table->uuid('sensor_uuid')->nullable();
            $table->foreign('sensor_uuid')->references('uuid')->on('sensors') ->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('sensor_rules');
    }
};
