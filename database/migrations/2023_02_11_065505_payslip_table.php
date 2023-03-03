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
    {Schema::create('payslips', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('personal_detail_id');
        $table->string('payment_month');
        $table->decimal('basic_salary', 12, 2);
        $table->decimal('total_earnings', 12, 2);
        $table->string('pf_number');
        $table->string('name');
        $table->string('station_name');
        $table->string('station_code');
        $table->string('desig_code');
        $table->string('desig_name');
        $table->string('id_no');
        $table->string('tax_pin');
        $table->string('comments');
        $table->timestamps();
    
        $table->foreign('personal_detail_id')->references('id')->on('personal_details')->onDelete('cascade');
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
