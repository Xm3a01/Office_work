<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('role');
            $table->string('sub_special');
            $table->string('country');
            $table->unsignedBigInteger('start_years');
            $table->unsignedBigInteger('start_month');
            $table->unsignedBigInteger('end_years');
            $table->unsignedBigInteger('end_month');
            $table->string('company_name');
            $table->string('section');
            $table->string('size');
            $table->string('last_salary');
            $table->timestamps();

            $table->foreign('user_id')
               ->references('id')->on('users')
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
        Schema::dropIfExists('exps');
    }
}
