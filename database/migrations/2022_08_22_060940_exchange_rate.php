<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ExchangeRate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchange_rate', function (Blueprint $table) {
            $table->id();
            $table->string("main_curency_no",25)->nullable();
            $table->string("curency_no",25)->nullable();
            $table->string("exchange_rate",25)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->string("created_by",50)->nullable();
            $table->string("updated_by",50)->nullable();
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
        Schema::drop('exchange_rate');
    }
}