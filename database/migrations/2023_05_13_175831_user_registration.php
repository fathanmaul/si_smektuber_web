<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_registration', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('registration_id')->constrained('registration')->onDelete('cascade');
            $table->string('nisn');
            $table->string('full_name');
            $table->string('place_birth');
            $table->date('date_birth');
            $table->string('phone');
            $table->string('address');
            $table->string('school_origin');
            $table->string('father_name');
            $table->string('mother_name');
            $table->string('guardian_name');
            $table->date('graduation_year');
            $table->foreignId('major_id_1')->constrained('major')->onDelete('cascade');
            $table->foreignId('major_id_2')->constrained('major')->onDelete('cascade');
            $table->tinyInteger('user_registration_status')->default(0);
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
