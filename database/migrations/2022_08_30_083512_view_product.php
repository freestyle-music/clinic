<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW product_view AS
        (
            select  p.product_no,p.product_barcode,p.description,p.description_2,p.stock_unit_of_measure_code as stock_unit,p.purche_unit_of_measure_code as purche_unit,p.inactived, p.image_url from product p ORDER BY p.created_at
        )
      ");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement('DROP VIEW IF EXISTS product_view');
    }
}
