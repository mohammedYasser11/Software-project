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
        Schema::create('follow_ups', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->string('weight')->nullable();
            $table->string('waist_size')->nullable();
            $table->string('abdominal_size')->nullable();
            $table->string('chest_size')->nullable();
            $table->string('thigh_size_r')->nullable();
            $table->string('thigh_size_l')->nullable();
            $table->string('arm_size_r')->nullable();
            $table->string('arm_size_l')->nullable();
            $table->string('calf_size_r')->nullable();
            $table->string('calf_size_l')->nullable();
            $table->string('side_1')->nullable();
            $table->string('side_2')->nullable();
            $table->string('side_3')->nullable();
            $table->string('side_4')->nullable();
            $table->string('steps_per_day')->nullable();
            $table->string('diet_comit')->nullable();
            $table->string('cardio_comit')->nullable();
            $table->string('training_comit')->nullable();
            $table->string('training_diff')->nullable();
            $table->string('cheat_meal')->nullable();
            $table->string('diet_edit')->nullable();
            $table->string('sleeping_hrs')->nullable();
            $table->boolean('progress')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('follow_ups');
    }
};
