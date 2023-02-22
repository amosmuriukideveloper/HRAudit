<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('payroll_number');
            $table->string('id_no');
            $table->integer('age');
            $table->enum('gender', ['male', 'female']);
            $table->unsignedBigInteger('disability_status');
            $table->string('passport_photo');
            $table->string('tel_mobile');
            $table->unsignedBigInteger('ethnicity');
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
};
