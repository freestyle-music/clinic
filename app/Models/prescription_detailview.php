<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_detailview extends Model
{
    use HasFactory;
    protected $table = "prescription_detail_veiw";
    protected $fillable = [
            'id',
            'prescription_id',
            'product_no',
            'unit_code',
            'price',
            'amount',
            'usage',
            'dosage',
            'biko',
            'del_flg',
            'created_user_id',
            'created_at',
            'updated_at',
            'updated_user_id',
            'description',
            'description_2',
            'product_barcode',
            'sup_code',
            'brand_code',
            'group_code',
            'unit_price'
    ];
}