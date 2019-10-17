<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->nullable();
            $table->string('ar_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('ar_last_name')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone');
            $table->string('phone_key')->default('00249');
            $table->string('password');
            $table->string('birthdate')->nullable();
            $table->string('idint_1')->nullable();
            $table->string('idint_2')->nullable();
            $table->string('religion')->nullable();
            $table->string('ar_religion')->nullable();
            $table->string('social_status')->nullable();
            $table->string('ar_social_status')->nullable();
            $table->string('avatar')->nullable();
            $table->string('ar_brith')->nullable();
            $table->string('brith')->nullable();
            $table->bigInteger('visit_count')->default(0);
            $table->string('role')->nullable()->nullable();
            $table->string('ar_role')->nullable();
            $table->string('country')->nullable();
            $table->string('ar_country')->nullable();
            $table->string('sub_special')->nullable();
            $table->string('ar_sub_special')->nullable();
            $table->string('expect_salary')->nullable();
            $table->string('salary_type')->default('SD');
            $table->string('city')->nullable();
            $table->string('ar_city')->nullable();
            $table->string('ar_gender')->nullable();
            $table->string('gender')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
