<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ReceiveOrderLine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_order_line', function (Blueprint $table) {
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
            $table->string("inventory_order",25)->nullable();
            $table->string("inventory_recetive",25)->nullable();
            $table->string("qty_balance",25)->nullable();
            $table->string("amount_balance",25)->nullable();
            $table->string("total_amount", 255)->nullable();
            $table->string("curency_code", 25)->nullable();
            $table->string("remark", 255)->nullable();
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
        Schema::drop('receive_order_line');
    }
}