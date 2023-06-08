<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductBrand extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_brand', function (Blueprint $table) {
            $table->id();
            $table->string("brand_code", 25)->nullable();
            $table->string("brand_name", 255)->nullable();
            $table->string("brand_name_2", 255)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->string("created_by", 50)->nullable();
            $table->string("updete_by", 50)->nullable();
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
        Schema::drop('product_brand');
    }
}