<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductVariantCode extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_variant_code', function (Blueprint $table) {
            $table->id();
            $table->string("product_no",25)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("description_2", 100)->nullable();
            $table->string("image_url",255)->nullable();
            $table->string("variant_unit_of_measure_code",255)->nullable();
            $table->string("stock_unit_of_measure_code",255)->nullable();
            $table->string("quantity_per_unit",255)->nullable();
            $table->string("unit_price",255)->nullable();
            $table->string("curency_code",255)->nullable();
            $table->string("status", 50)->nullable();
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
        Schema::drop('product_variant_code');
    }
}