<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubSpecialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_specials', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->integer('special_id')->unsigned();
            $table->timestamps();

            $table->foreign('special_id')->references('id')->on('specials')->OnDelete('cascade'); //references
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_specials');
    }
}
