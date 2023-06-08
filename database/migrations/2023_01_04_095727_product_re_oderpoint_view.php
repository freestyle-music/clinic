<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductReOderpointView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW product_reoderpoint_view AS (
               SELECT ps.product_no,ps.description,P .reorder_point, ps.unit_of_measure_code,ps.unit_price, SUM(inventory)as inventorys FROM product_stock_keeping_units ps INNER JOIN product P ON ps.product_no = P.product_no  WHERE ps.statuse ='open' GROUP BY ps.product_no,ps.description,P .reorder_point,ps.unit_price, ps.unit_of_measure_code
         )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS product_reoderpoint_view');
    }
}