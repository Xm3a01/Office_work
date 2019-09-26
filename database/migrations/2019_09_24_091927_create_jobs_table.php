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
            $table->unsignedBigInteger('company_id');
            $table->string('ar_company');
            $table->string('yearsOfExper');
            $table->string('role');
            $table->string('ar_role');
            $table->string('special');
            $table->string('ar_special');
            $table->string('sub_special');
            $table->string('ar_sub_special');
            $table->string('selary')->default('-');
            $table->string('selary_type');
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->string('job_type');
            $table->string('ar_job_type');
            $table->timestamps();

            $table->foreign('company_id')
               ->references('id')->on('companies')
                    ->onDelete('cascade');
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
