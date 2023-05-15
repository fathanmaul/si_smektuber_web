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
            $table->string('extracurricular_logo')->nullable();
            $table->string('extracurricular_photo_1')->nullable();
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
