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
            // $table->bigIncrements('id');
            // $tabe->unsignedBigInteger('company_id');
            // $tabe->unsignedBigInteger('roles_id');
            // $table->string('yearsOfExper');
            // $table->string('selary')->default('-');
            // $table->longText('description')->nullable();
            // $table->string('job_type');
            // $table->timestamps();

            // $table->foreign('company_id')->referencse('id')->on('companies')->onDelete('cascade');
            // $table->foreign('roles_id')->referencse('id')->on('roles')->onDelete('cascade');
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
