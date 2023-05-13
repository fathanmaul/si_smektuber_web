<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MajorAchievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('major_achievement', function(Blueprint $table){
            $table->id();
            $table->foreignId('major_id')->constrained('major')->onDelete('cascade')->onUpdate('cascade');
            $table->string('achievement_name');
            $table->text('achievement_description');
            $table->string('achievement_photo_1')->nullable();
            $table->string('achievement_photo_2')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
