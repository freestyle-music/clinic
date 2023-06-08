<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PrescriptionDetailVeiw extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement("
        CREATE VIEW prescription_detail_veiw AS (
        SELECT
        prescription_details.*,
        product.description,
        product.description_2,
        product.product_barcode,
        product.sup_code,
        product.brand_code,
        product.group_code,
        product_variant_code.unit_price
        FROM
        prescription_details
        LEFT JOIN product ON prescription_details.product_no = product.product_no
        LEFT JOIN product_variant_code ON product_variant_code.variant_unit_of_measure_code = prescription_details.unit_code
        GROUP BY
        prescription_details.id,
		prescription_details.prescription_id,
		prescription_details.product_no,
		prescription_details.unit_code,
		prescription_details.price,
		prescription_details.amount,
		prescription_details.usage,
		prescription_details.dosage,
		prescription_details.biko,
		prescription_details.del_flg,
		prescription_details.created_user_id,
		prescription_details.created_at,
		prescription_details.updated_at,
		prescription_details.updated_user_id,
		product.description,
		product.description_2,
		product.product_barcode,
		product.sup_code,
		product.brand_code,
		product.group_code,
		product_variant_code.unit_price
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
        DB::statement('DROP VIEW IF EXISTS prescription_detail_veiw');
    }
}