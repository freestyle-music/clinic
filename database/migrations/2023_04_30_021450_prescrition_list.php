<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrescritionList extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prescrition_list', function (Blueprint $table) {
            $table->string("preId", 25)->primary();
            $table->string("product_no",25)->nullable();
            $table->string("product_type",100)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("price", 25)->nullable();
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
        Schema::drop('prescrition_list'); 
    }
}