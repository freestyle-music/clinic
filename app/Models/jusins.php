<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jusins extends Model
{
    use HasFactory;
     protected $table = "jusins_view";
     protected $fillable = [
        'id',
        'jusins_id',
        'jusinsya_code',
        'kazoku_id',
        'yoyaku_kbn',
        'simei_s',
        'simei_m',
        'simei_roma_s',
        'simei_roma_m',
        'simei_kana_s',
        'simei_kana_m',
        'birthday',
        'sex',
        'health_no_kigo',
        'health_no_bango',
        'jtk1_zip',
        'jtk1_pref',
        'jtk1_addr1',
        'jtk1_addr2',
        'jtk1_tel',
        'jtk1_fax',
        'jtk2_zip',
        'jtk2_pref',
        'jtk2_addr1',
        'jtk2_addr2',
        'jtk2_tel',
        'jtk2_fax',
        'hphone',
        'mail',
        'biko',
        'jigyosyo_id',
        'jigyosyo_group_id',
        'jugyoin_code',
        'renraku_kbn',
        'sizai_souhu_kbn',
        'report_send_kbn',
        'hi_hokensya_name',
        'zokugara',
        'first_jusin_ymd',
        'last_jusin_ymd',
        'report_send_zip',
        'report_send_addr',
        'report_send_meigi',
        'report_send_k_zip',
        'report_send_k_addr',
        'report_send_k_meigi',
        'del_flg',
        'created_user_id',
        'created_at',
        'updated_user_id',
        'updated_at',
        'health_no',
        'yobi1',
        'yobi2',
        'yobi3',
        'tokuisaki_code',
        'tokusaki_code_ymd',
        'syozoku_code',
        'no_reserve_kbn',
        't_hoken_biko',
        'jusin_kbn',
        'jusin_ymd',
        'status'
    ];
}