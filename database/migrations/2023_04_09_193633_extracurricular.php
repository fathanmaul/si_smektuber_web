<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Extracurricular extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extracurricular', function (Blueprint $table) {
            $table->id();
            $table->string('extracurricular_name');
            $table->text('extracurricular_description');
            $table->string('extracurricular_logo');
            $table->string('extracurricular_photo_1');
            $table->string('extracurricular_photo_2');
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
