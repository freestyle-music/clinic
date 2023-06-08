<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaboLab extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('labo_lab', function (Blueprint $table) {
            $table->id();
            $table->string("labId", 25)->nullable();
            $table->string("pateinId", 25)->nullable();             
            $table->string("Age", 10)->nullable();
            $table->string("Date", 25)->nullable();
            $table->string("BP", 10)->nullable();  
            $table->string("Pr", 10)->nullable();
            $table->string("rr", 10)->nullable();
            $table->string("Spo2", 10)->nullable();
            $table->string("T", 10)->nullable();
            $table->string("status", 25)->nullable();
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
        Schema::drop('labo_lab'); 
    }
}