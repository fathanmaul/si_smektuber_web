<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DetailRegistration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_registration', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade'); // ID User
            $table->foreignId('registration_id')->constrained('registration')->onDelete('cascade'); // ID PPDB
            $table->string('nisn'); // NISN Siswa
            $table->string('full_name'); // Nama SIswa
            $table->string('place_birth'); // Tempat Lahir
            $table->date('date_birth'); // Tanggal Lahir
            $table->string('phone'); // Telepon
            $table->string('address'); // Alamat
            $table->string('school_origin'); // Asal Sekolah
            $table->string('father_name'); // Nama Ayah
            $table->string('mother_name'); // Nama Ibu
            $table->string('guardian_name')->nullable(); // Wali Murid
            $table->date('graduation_year'); // Tahun Lulus
            $table->foreignId('major_id_1')->constrained('major')->onDelete('cascade'); // Pilihan Jurusan 1
            $table->foreignId('major_id_2')->constrained('major')->onDelete('cascade'); // Pilihan Jurusan 2
            $table->tinyInteger('user_registration_status')->default(0); // Status Kelulusan
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
