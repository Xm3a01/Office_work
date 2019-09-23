<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('logo');
            $table->unsignedBigInteger('role_id');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('country_id');
            $table->sring('email');
            $table->timestamps();

            $table->foreign('country_id')->referencse('id')->on('countries')->onDelete('cascade');
            $table->foreign('role_id')->referencse('id')->on('roles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companies');
    }
}
