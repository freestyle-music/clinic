<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PurcheaOrderView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW purchea_order_view AS (
            SELECT P .*, s.sup_name,s.sup_name_2,	s.address,s.phone_no,s.phone_no_2,s.email,s.contact_name,	s.contact_phone,s.thumbnail FROM purchea_order P INNER JOIN suppliyer s ON P .suppliyer_code = s.sup_code
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
        DB::statement('DROP VIEW IF EXISTS purchea_order_view');
    }
}
