<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PosSale extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Pos_Sale', function (Blueprint $table) {
            $table->id();
            $table->string("document_no", 25)->nullable();
            $table->string("document_type", 250)->nullable();
            $table->string("product_no", 25)->nullable();
            $table->string("description", 255)->nullable();
            $table->string("line_no", 25)->nullable();
            $table->string("unit_code", 255)->nullable();
            $table->string("unit_price", 255)->nullable();
            $table->string("inventory", 25)->nullable();
            $table->string("total_amount", 255)->nullable();
            $table->string("curency_code", 25)->nullable();
            $table->string("remark", 255)->nullable();
            $table->string("statue", 25)->nullable();
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
       DB::statement('DROP VIEW IF EXISTS Pos_Sale');
    }
}