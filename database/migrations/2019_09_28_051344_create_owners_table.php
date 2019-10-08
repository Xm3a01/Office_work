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
            $table->string('country');
            $table->string('ar_country');
            $table->string('ar_city');
            $table->string('city');
            $table->string('ar_gender');
            $table->string('gender');
            $table->string('company_name');
            $table->string('logo');
            $table->longText('description')->nullable();
            $table->longText('ar_description')->nullable();
            $table->string('role');
            $table->string('ar_role');
            $table->string('company_email');
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
