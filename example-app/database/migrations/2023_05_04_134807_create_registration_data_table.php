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
        Schema::create('registration_data', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('age');
            $table->string('height');
            $table->string('weight');
            $table->string('waist_size');
            $table->string('abdominal_size');
            $table->string('chest_size');
            $table->string('acitve_rate');
            $table->string('gym_per_week');
            $table->string('goal');
            $table->string('training_goal');
            $table->string('meals_no');
            $table->string('thigh_size_r');
            $table->string('thigh_size_l');
            $table->string('arm_size_r');
            $table->string('arm_size_l');
            $table->string('calf_size_r');
            $table->string('calf_size_l');
            $table->string('fat_source');
            $table->string('carb_source');
            $table->string('fruit_source');
            $table->string('vege_source');
            $table->string('supplements');
            $table->string('allergy');
            $table->string('food_disliked');
            $table->string('protien_source');
            $table->string('side_1');
            $table->string('side_2');
            $table->string('side_3');
            $table->string('side_4');
            $table->string('inbody');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registration_data');
    }
};
