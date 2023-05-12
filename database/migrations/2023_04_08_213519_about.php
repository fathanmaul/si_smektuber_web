<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class About extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->id();
            // $table->string('name')->nullable();
            // $table->text('vission')->nullable();
            // $table->text('mission')->nullable();
            // $table->string('headmaster_name')->nullable();
            // $table->string('headmaster_photo')->nullable();
            // $table->string('headmaster_quote')->nullable();
            // $table->text('headmaster_description')->nullable();
            // $table->string('accreditation')->nullable();
            // $table->string('phone')->nullable();
            // $table->string('email')->nullable();
            // $table->text('address')->nullable();
            // $table->string('facebook')->nullable();
            // $table->string('instagram')->nullable();
            // $table->string('twitter')->nullable();
            // $table->string('youtube')->nullable();
            // $table->string('linkedin')->nullable();
            // $table->string('map')->nullable();
            // $table->string('logo')->nullable();
            // $table->string('favicon')->nullable();
            // $table->text('school_description')->nullable();
            // $table->text('school_history')->nullable();
            // $table->string('school_photo')->nullable();
            // $table->string('school_quote')->nullable();
            $table->string('school_name')->nullable();
            $table->string('school_accreditation')->nullable();
            $table->text('school_history')->nullable();
            $table->string('school_slogan')->nullable();
            $table->string('school_vision')->nullable();
            $table->text('school_mission')->nullable();
            $table->string('school_address')->nullable();
            $table->string('school_phone', 18)->nullable();
            $table->string('school_email')->nullable();
            $table->string('school_whatsapp')->nullable();
            $table->string('school_facebook')->nullable();
            $table->string('school_instagram')->nullable();
            $table->string('school_twitter')->nullable();
            $table->string('school_youtube')->nullable();
            $table->string('school_logo')->nullable();
            $table->string('school_picture_1')->nullable();
            $table->string('school_picture_2')->nullable();
            $table->string('school_headmaster_name')->nullable();
            $table->string('school_headmaster_picture')->nullable();
            $table->string('school_headmaster_quote')->nullable();
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
        Schema::dropIfExists('about');
    }
}
