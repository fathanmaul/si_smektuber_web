<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Registration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->foreignId('school_year')->constrained('school_year')->onDelete('cascade'); // Combobox
            $table->text('registration_description');
            $table->string('registration_poster')->nullable();
            $table->date('registration_date_start');
            $table->date('registration_date_end');
            $table->tinyInteger('registration_status')->default(0);
            $table->softDeletes(); // deleted_at
            $table->timestamps(); // created_at & updated_at
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
