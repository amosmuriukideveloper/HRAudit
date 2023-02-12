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
            $table->unsignedBigInteger('personal_detail_id');
            $table->boolean('appointment_letter');
            $table->unsignedBigInteger('employment_term_id');
            $table->date('date_of_employment');
            $table->unsignedBigInteger('probation_status_id');
            $table->unsignedBigInteger('position_id');
            $table->unsignedBigInteger('job_grade_id');
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
