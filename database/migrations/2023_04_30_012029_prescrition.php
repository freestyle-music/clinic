<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Prescrition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescriptions', function (Blueprint $table) {
            $table->id();
            $table->string("preid", 25)->nullable();
            $table->string("pateinid", 25)->nullable();             
            $table->string("age", 10)->nullable();
            $table->dateTime("visit_date")->nullable();
            $table->string("peple_group", 50)->nullable();
            $table->string("bp", 10)->nullable();
            $table->string("pr", 10)->nullable();
            $table->string("rr", 10)->nullable();
            $table->string("height", 10)->nullable();
            $table->string("width", 10)->nullable();
            $table->string("spo2", 10)->nullable();
            $table->string("t", 10)->nullable();
            $table->string("status", 25)->nullable();
            $table->dateTime("appointment_date")->nullable();
            $table->string("remark", 255)->nullable(); 
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
        Schema::drop('prescrition'); 
    }
}