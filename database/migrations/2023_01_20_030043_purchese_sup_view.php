<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PurcheseSupView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW purchese_sup_view AS (
            select po. document_no,sp.* from purchea_order po INNER JOIN suppliyer sp on po.suppliyer_code = sp.sup_code
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
        DB::statement('DROP VIEW IF EXISTS purchese_sup_view');
    }
}
