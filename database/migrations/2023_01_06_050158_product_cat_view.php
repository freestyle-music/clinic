<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ProductCatView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    DB::statement("
        CREATE VIEW product_cat_view AS (
            SELECT pr.product_no , sub.* from suppliyer sub INNER JOIN product pr on sub.sup_code = pr.sup_code
        )"
    );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    { 
         DB::statement('DROP VIEW IF EXISTS product_cat_view'); //
    }
}
