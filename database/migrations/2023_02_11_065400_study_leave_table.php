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
        Schema::create('leave', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('personal_detail_id');
            $table->date('date_started');
            $table->date('date_ended');
            $table->string('institution_of_study');
            $table->string('course_of_study');
            $table->date('certificate_date');
            $table->string('approving_signatory');
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
