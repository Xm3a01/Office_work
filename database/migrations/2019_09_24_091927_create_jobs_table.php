<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('yearsOfExper');
            $table->string('role');
            $table->string('ar_role');
            $table->string('country');
            $table->string('ar_country');
            $table->string('city');
            $table->string('ar_city');
            $table->string('company_name');
            $table->string('special');
            $table->string('ar_special');
            $table->string('sub_special');
            $table->string('ar_sub_special');
            $table->string('selary')->default('-'); 
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->string('status');
            $table->string('ar_status');
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
        Schema::dropIfExists('jobs');
    }
}
