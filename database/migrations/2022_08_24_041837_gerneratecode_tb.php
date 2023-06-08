<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GerneratecodeTb extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serail_code', function (Blueprint $table) {
            $table->string("id", 25)->primary();
            $table->string("serail_code", 25)->nullable();
            $table->string("prefix_code", 25)->nullable();
            $table->string("qty_code", 3)->nullable();
            $table->string("start_code", 255)->nullable();
            $table->string("end_code", 50)->nullable();
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
        Schema::drop('serail_code');
    }
}