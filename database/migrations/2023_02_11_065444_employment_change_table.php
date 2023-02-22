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
        Schema::create('employment_changes', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('personal_detail_id');
            $table->unsignedBigInteger('relative_id');
            $table->string('name');
            $table->string('id_no');
            $table->unsignedBigInteger('job_title_id');
            $table->unsignedBigInteger('relationship_id');
            $table->unsignedBigInteger('department_id');
            $table->string('study_leave');
            $table->date('start_date');
            $table->date('end_date');
            $table->unsignedBigInteger('institution_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('certificate_id');
            $table->date('date');
            $table->string('approving_supervisor');
            $table->unsignedBigInteger('change_type_id');                      
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
