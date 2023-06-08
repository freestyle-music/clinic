<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductUnitOfMeasure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_unit_of_measure', function (Blueprint $table) {
            $table->id();
            $table->string("code",50)->nullable();
            $table->string("unit_code", 100)->nullable();
            $table->string("unit_of_measure",100)->nullable();
            $table->string("type", 50)->nullable();
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
        Schema::drop('product_unit_of_measure');
    }
}