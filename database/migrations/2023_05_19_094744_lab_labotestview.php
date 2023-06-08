<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LabLabotestview extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         DB::statement("
            CREATE VIEW service_testview AS (
                SELECT
                pateint.firstname,
                    pateint.lstname,
                    pateint.phone1,
                    pateint.phone2,
                    pateint.birstdate,
                    pateint.allergies,
                    pateint.history_disease,
                    pateint.address,
                    pateint.village,
                    pateint.commune,
                    pateint.district,
                    pateint.pro_city,
                pateint.region,
                    labo_lab.*
                FROM
                    labo_lab
                INNER JOIN pateint ON pateint.pateinid = labo_lab.pateinId
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
        //
        DB::statement("DROP VIEW IF EXISTS service_testview");
    }
}