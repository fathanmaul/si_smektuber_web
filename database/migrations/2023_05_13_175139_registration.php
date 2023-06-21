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
            $table->foreignId('school_year')->nullable()->constrained('school_year')->nullOnDelete()->cascadeOnUpdate(); // Combobox
            $table->text('description');
            $table->string('poster')->nullable();
            $table->date('date_start');
            $table->date('date_end');
            $table->tinyInteger('status')->default(0);
            $table->softDeletes();
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
