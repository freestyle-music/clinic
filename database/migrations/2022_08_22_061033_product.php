<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Product extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->string("id", 25)->primary();
            $table->string("product_no",25)->nullable();
            $table->string("product_barcode",25)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("description_2", 100)->nullable();
            $table->string("type", 100)->nullable();
            $table->string("image_url",255)->nullable();
            $table->string("stock_unit_of_measure_code",255)->nullable();
            $table->string("purche_unit_of_measure_code",255)->nullable();
            $table->string("bom_no",25)->nullable();
            $table->string("reorder_point",25)->nullable();
            $table->string("sup_code",25)->nullable();
            $table->string("brand_code",25)->nullable();
            $table->string("group_code",25)->nullable();
            $table->string("cat_code",25)->nullable();
            $table->string("variant_code",25)->nullable();
            $table->string("unit_price",255)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->string("created_by",50)->nullable();
            $table->string("updete_by",50)->nullable();
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
        Schema::drop('product');
    }
}