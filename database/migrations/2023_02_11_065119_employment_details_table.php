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
        if (!Schema::hasTable('employment_details')) {
            Schema::create('employment_details', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('personal_detail_id');
                $table->boolean('appointment_letter')->nullable();
                $table->unsignedBigInteger('employment_term_id')->nullable();
                $table->unsignedBigInteger('probation_statuses_id')->nullable();

                $table->date('employment_year')->nullable();
                $table->unsignedBigInteger('department_id')->nullable();
                $table->string('comments')->nullable();;
                $table->timestamps();
            });
        }
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
