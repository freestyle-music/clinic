<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductVavaincodeView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW product_vavaincode_view AS (
            select p.product_no,p.stock_unit_of_measure_code,p.purche_unit_of_measure_code,pv.variant_unit_of_measure_code,pv.quantity_per_unit,pv.unit_price,pv.status,curency_code from product p INNER JOIN product_variant_code pv on p.product_no = pv.product_no
         )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS product_vavaincode_view');
    }
}
