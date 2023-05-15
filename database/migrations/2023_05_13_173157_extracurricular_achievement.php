<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExtracurricularAchievement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurricular_achievement', function(Blueprint $table){
            $table->id();
            $table->foreignId('extracurricular_id')->constrained('extracurricular')->onDelete('cascade')->onUpdate('cascade');
            $table->string('name');
            $table->text('description');
            $table->string('photo')->nullable();
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
        //
    }
}
