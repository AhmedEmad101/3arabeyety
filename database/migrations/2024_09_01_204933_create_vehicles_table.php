<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Model_ID');
            $table->unsignedBigInteger('Tank_ID');
            $table->unsignedBigInteger('Owner_ID');
            $table->unsignedBigInteger('Transimision_ID');
            $table->unsignedBigInteger('Type_ID');
            $table->unsignedBigInteger('Motor_ID');
            $table->unsignedBigInteger('Color_ID');
            $table->unsignedBigInteger('Condition_ID');
            $table->double('Price');
            $table->string('Photo');
            $table->foreign('Model_ID')->references('id')->on('vehicle_models');
            $table->foreign('Tank_ID')->references('id')->on('tanks');
            $table->foreign('Owner_ID')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Transimision_ID')->references('id')->on('transimissions');
            $table->foreign('Type_ID')->references('id')->on('types');
            $table->foreign('Motor_ID')->references('id')->on('motors')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('Color_ID')->references('id')->on('colors');
            $table->foreign('Condition_ID')->references('id')->on('conditions');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
