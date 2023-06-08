<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ViewProductBoomSelect extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW product_view_boom AS
        (       
            SELECT * FROM product WHERE product_no NOT IN ( SELECT boom_product_id	FROM	product_bom	 WHERE boom_product_id <>'')
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
        DB::statement('DROP VIEW IF EXISTS product_view_boom');
    }
}