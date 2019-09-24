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
            $table->unsignedBigInteger('user_id');
            $table->string('name');
            $table->string('logo');
            $table->longText('description')->nullable();
            $table->unsignedBigInteger('role_id');
            $table->unsignedBigInteger('country_id');

            $table->string('email');
            $table->timestamps();

            $table->foreign('role_id')
              ->references('id')->on('roles')
                    ->onDelete('cascade');

            $table->foreign('user_id')
              ->references('id')->on('users')
                    ->onDelete('cascade');
                    
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
