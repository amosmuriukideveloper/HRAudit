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
        Schema::create('employment_details', function (Blueprint $table) {
            $table->id();
            $table->boolean('appointment_letter_id')->nullable();
            $table->unsignedBigInteger('employment_term_id');
            $table->unsignedBigInteger('probation_statuses_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('job_grade_id');
            $table->unsignedBigInteger('department_id');
            $table->string('employee_certificate');
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
