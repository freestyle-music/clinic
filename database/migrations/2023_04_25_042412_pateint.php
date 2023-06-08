<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Pateint extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pateint', function (Blueprint $table) {
            $table->id();
            $table->string("pateinid", 25)->nullable();
            $table->string("lstname", 25)->nullable();
            $table->string("firstname", 250)->nullable();
            $table->string("birstdate", 25)->nullable();
            $table->string("age", 25)->nullable();
            $table->string("sex", 25)->nullable();
            $table->string("allergies", 250)->nullable();
            $table->string("history_disease", 250)->nullable();
            $table->string("phone1", 25)->nullable();
            $table->string("phone2", 25)->nullable();
            $table->string("email", 250)->nullable();
            $table->string("address", 250)->nullable();
            $table->string("address2", 250)->nullable();
            $table->string("village", 250)->nullable();
            $table->string("commune", 250)->nullable();
            $table->string("district", 250)->nullable();
            $table->string("pro_city", 255)->nullable();
            $table->string("region", 255)->nullable();
            $table->string("remark", 255)->nullable();
            $table->string("status", 25)->nullable();
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
        Schema::drop('Pateint'); 
    }
}