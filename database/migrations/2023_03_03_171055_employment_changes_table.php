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
        Schema::dropIfExists('employment_changes');

        Schema::create('employment_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('personal_detail_id');
            $table->unsignedBigInteger('relative_id')->nullable();
            $table->string('name')->nullable();
            $table->string('id_no')->nullable();
            $table->string('job_title_id')->nullable();
            $table->string('relationship')->nullable();
            $table->unsignedBigInteger('department_id')->nullable();
            $table->string('study_leave');
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('institution');
            $table->string('course');
            $table->string('certificate');
            $table->dateTime('date');
            $table->string('approving_signatory');                     
            $table->string('comments')->nullable();                     
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
