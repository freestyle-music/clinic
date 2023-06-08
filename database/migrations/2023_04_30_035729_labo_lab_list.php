<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LaboLabList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('labo_lab_list', function (Blueprint $table) {
             $table->id();
            $table->string("labId", 25)->nullable(); 
            $table->string("product_no",25)->nullable();
            $table->string("product_type",100)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("test_type", 250)->nullable();
            $table->string("normal_value", 250)->nullable();
            $table->string("test_value", 250)->nullable();
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
          Schema::drop('labo_lab_list'); 
    }
}