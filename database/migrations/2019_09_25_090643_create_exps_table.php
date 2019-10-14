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
            $table->string('ar_role');
            $table->string('sub_special'); 
            $table->string('ar_sub_special');
            $table->string('expert_year');
            $table->string('ar_level');
            $table->string('level');
            $table->string('expert_pdf');
            $table->string('ar_summary')->nullable();
            $table->string('summary')->nullable();
            $table->unsignedBigInteger('start_year');
            $table->unsignedBigInteger('start_month');
            $table->unsignedBigInteger('end_year');
            $table->unsignedBigInteger('end_month');
            
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
