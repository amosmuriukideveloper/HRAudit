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
        if (!Schema::hasTable('other_certificates')) {
            Schema::create('other_certificates', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('personal_detail_id');
                $table->string('cert_title')->nullable();
                $table->string('course')->nullable();
                $table->date('cert_year')->nullable();
                $table->string('cert_number')->nullable();
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
