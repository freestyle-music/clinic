<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Users extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->string("id", 25)->primary();
            $table->string('user_code',50)->nullable();
            $table->string('user_name',250)->nullable();
            $table->string('password',50)->nullable();
            $table->string('email',250)->nullable();
            $table->string('role',2)->nullable();
            $table->string("statue", 25)->nullable();
            $table->string("created_by", 50)->nullable();
            $table->string("updated_by", 50)->nullable();
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
        Schema::drop('users');
    }
}