<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Setup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('SetUp', function (Blueprint $table) {
            $table->id();
            $table->string("company_name", 250)->nullable();
            $table->string("company_Address", 250)->nullable();
            $table->string("company_Phone", 250)->nullable();
            $table->string("company_Email", 250)->nullable();
            $table->string("main_Currency", 250)->nullable();
            $table->string("product_check", 250)->nullable();
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
           Schema::drop('SetUp');
    }
}