<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UserView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
           //
        DB::statement("
            CREATE VIEW user_view AS (
             SELECT
                users.*,
                employee.lstname,
                employee.firstname,
                employee.birstdate,
                employee.sex,
                employee.phone1,
                employee.phone2,
                employee.email as em_email,
                employee.hiredate,
                employee.address,
                employee.address2,
                employee.village,
                employee.commune,
                employee.district,
                employee.pro_city,
                employee.region,
                employee.remark,
                employee.status
                FROM
                    employee
                INNER JOIN users ON users.user_code = employee.id
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
        DB::statement("DROP VIEW IF EXISTS user_view");
    }
}