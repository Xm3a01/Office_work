<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOwnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('owners', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('email')->unique();
            $table->bigInteger('visit_count')->default(0);
            $table->string('phone');
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('ar_country')->nullable();
            $table->string('ar_city')->nullable();
            $table->string('city')->nullable();
            $table->string('ar_gender')->nullable();
            $table->string('gender')->nullable();
            $table->string('company_name')->nullable();
            $table->string('logo')->nullable();
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->string('role');
            $table->string('ar_role');
            $table->string('company_email')->nullable();
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
        Schema::dropIfExists('owners');
    }
}
