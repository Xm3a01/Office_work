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
            $table->unsignedBigInteger('country_id');
            $table->string('name');
            $table->string('ar_name');
            $table->string('logo');
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->string('role');
            $table->string('ar_role');
            $table->string('ar_country');
            $table->string('email');
            $table->timestamps();
                    
            $table->foreign('country_id')
                    ->references('id')->on('countries')
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
        Schema::dropIfExists('companies');
    }
}
