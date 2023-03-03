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
        Schema::create('employee_work_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_detail_id');
            $table->string('position');
            $table->unsignedBigInteger('job_grade_id')->nullable();
            $table->date('employment_year')->nullable();
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
        Schema::dropIfExists('employee_work_experience');
    }
};
