<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productvariantcode extends Model
{
    use HasFactory;
    protected $table = "product_variant_code";
    protected $fillable =[
        'id',
        'product_no',
        'description',
        'description_2',
        'image_url',
        'stock_unit_of_measure_code',
        'variant_unit_of_measure_code',
        'quantity_per_unit',
        'unit_price',
        'curency_code',
        'status',
        'inactived',
        'created_by',
        'updete_by',
        'updated_by'
    ];
}