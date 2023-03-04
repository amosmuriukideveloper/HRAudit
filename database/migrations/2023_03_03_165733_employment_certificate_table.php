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
        if (!Schema::hasTable('employee_certificate')) {
            Schema::create('employee_certificate', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('personal_detail_id');
                $table->string('name')->nullable();
                $table->string('index_number')->nullable();
                $table->string('school')->nullable();
                $table->string('certificate_number')->nullable();
                $table->date('certificate_year')->nullable();
                $table->text('comments')->nullable();
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
