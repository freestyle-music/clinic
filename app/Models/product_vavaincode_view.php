<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_vavaincode_view extends Model
{
    use HasFactory;
    protected $table = "product_vavaincode_view";
    protected $fillable = [
        'product_no',
        'stock_unit_of_measure_code',
        'purche_unit_of_measure_code',
        'variant_unit_of_measure_code',
        'quantity_per_unit',
        'unit_price',
        'curency_code'
    ];
}
