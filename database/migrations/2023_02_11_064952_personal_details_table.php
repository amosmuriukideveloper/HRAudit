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
        if (!Schema::hasTable('personal_details')) {
            Schema::create('personal_details', function (Blueprint $table) {
                $table->id();
                $table->string('name');
                $table->string('payroll_number');
                $table->string('id_no');
                $table->integer('age');
                $table->enum('gender', ['male', 'female']);
                $table->enum('disability_status', ['yes', 'no'])->nullable();
                $table->enum('passport_photo', ['yes', 'no']);
                $table->string('tel_mobile');
                $table->unsignedBigInteger('ethnicity')->nullable();
                $table->string('comments')->nullable();
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
