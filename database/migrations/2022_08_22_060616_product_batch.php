<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductBatch extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_batch', function (Blueprint $table) {
            $table->string("id", 25)->primary();
            $table->string("bom_no",25)->nullable();
            $table->string("product_no",25)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("bom_unit_of_measure_code",255)->nullable();
            $table->string("quantity_per_unit",255)->nullable();
            $table->string("quantity", 50)->nullable();
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
        Schema::drop('product_batch');
    }
}