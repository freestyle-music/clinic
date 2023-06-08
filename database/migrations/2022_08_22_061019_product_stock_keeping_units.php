<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductStockKeepingUnits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_stock_keeping_units', function (Blueprint $table) {
            $table->id();
            $table->string("document_no", 25)->nullable();
            $table->string("document_type", 25)->nullable();
            $table->string("product_no", 25)->nullable();
            $table->string("description", 255)->nullable();
            $table->string("issu_date", 25)->nullable();
            $table->string("exprit_date", 25)->nullable();
            $table->string("line_no", 25)->nullable();
            $table->string("unit_of_measure_code", 255)->nullable();
            $table->string("unit_price", 255)->nullable();
            $table->string("inventory", 25)->nullable();
            $table->string("inventory_new",25)->nullable();          
            $table->string("inventory_old",25)->nullable();
            $table->string("curency_code", 25)->nullable();
            $table->string("remark", 255)->nullable();
            $table->string("statuse", 50)->nullable();
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
        Schema::drop('product_stock_keeping_units');
    }
}