<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PatientPrecrition extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW view_patint_precription AS (
              SELECT
		`pateint`.`id` AS `paId`,
		`pateint`.`lstname` AS `lstname`,
		`pateint`.`firstname` AS `firstname`,
		`pateint`.`sex` AS `sex`,
		`pateint`.`birstdate` AS `birstdate`,
		`pateint`.`allergies` AS `allergies`,
		`pateint`.`history_disease` AS `history_disease`,
		`pateint`.`phone1` AS `phone1`,
		`pateint`.`phone2` AS `phone2`,
		`pateint`.`email` AS `email`,
		`pateint`.`address` AS `address`,
		`pateint`.`address2` AS `address2`,
		`pateint`.`village` AS `village`,
		`pateint`.`commune` AS `commune`,
		`pateint`.`district` AS `district`,
		`pateint`.`pro_city` AS `pro_city`,
		`pateint`.`region` AS `region`,
		to_days(CURRENT_TIMESTAMP()) - to_days(
			`prescriptions`.`visit_date`
		) AS `countday`,
		date_format(
			`prescriptions`.`visit_date`,
			'%d-%m-%Y'
		) AS `visit_days`,
		date_format(
			`prescriptions`.`visit_date`,
			'%m-%Y'
		) AS `visit_month`,
		date_format(
			`prescriptions`.`visit_date`,
			'%Y'
		) AS `visit_years`,
		`prescriptions`.`id` AS `id`,
		`prescriptions`.`preid` AS `preid`,
		`prescriptions`.`pateinid` AS `pateinid`,
		timestampdiff(
			YEAR,
			`pateint`.`birstdate`,
			curdate()
		) AS `age`,
		`prescriptions`.`visit_date` AS `visit_date`,
		`prescriptions`.`peple_group` AS `peple_group`,
		`prescriptions`.`bp` AS `bp`,
		`prescriptions`.`pr` AS `pr`,
		`prescriptions`.`rr` AS `rr`,
		`prescriptions`.`height` AS `height`,
		`prescriptions`.`width` AS `width`,
		`prescriptions`.`spo2` AS `spo2`,
		`prescriptions`.`t` AS `t`,
		`prescriptions`.`status` AS `status`,
		`prescriptions`.`appointment_date` AS `appointment_date`,
		`prescriptions`.`remark` AS `remark`,
		`prescriptions`.`created_by` AS `created_by`,
		`prescriptions`.`updated_by` AS `updated_by`,
		`prescriptions`.`created_at` AS `created_at`,
		`prescriptions`.`updated_at` AS `updated_at`
	FROM
		(
			`pateint`
			JOIN `prescriptions` ON (
				`prescriptions`.`pateinid` = `pateint`.`pateinid`
			)
		)
         )");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //  DB::statement('DROP VIEW IF EXISTS view_patint_precription');
    }
}