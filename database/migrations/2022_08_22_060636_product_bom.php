<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductBom extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_bom', function (Blueprint $table) {
            $table->id();
            $table->string("product_no",25)->nullable();
            $table->string("boom_product_id",25)->nullable();
            $table->string("description", 100)->nullable();
            $table->string("bom_unit_of_measure_code",255)->nullable();
            $table->string("quantity_per_unit",255)->nullable();
            $table->string("quantity", 50)->nullable();
            $table->string("inactived", 50)->nullable();
            $table->tinyInteger('is_deleted')->default(0);
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
        Schema::drop('product_bom');
    }
}