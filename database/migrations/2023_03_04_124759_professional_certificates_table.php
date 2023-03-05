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
        if (!Schema::hasTable('professional_certificates')) {
            Schema::create('professional_certificates', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('personal_detail_id');
                $table->string('professional_body')->nullable();
                $table->string('membership_number')->nullable();
                $table->string('license_number')->nullable();
                $table->dateTime('cert_year')->nullable();
                $table->string('membership_status')->nullable();
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
