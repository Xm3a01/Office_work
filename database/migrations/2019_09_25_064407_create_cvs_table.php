<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->string('role');
            $table->string('country');
            $table->string('sub_special');
            $table->string('ar_sub_special');
            $table->string('salary');
            $table->string('salary_type');
            $table->string('ar_country');
            $table->string('city');
            $table->string('ar_city');
            $table->string('level_of_work');
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
        Schema::dropIfExists('cvs');
    }
}
