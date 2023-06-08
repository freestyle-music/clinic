<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_inventery extends Model
{
    use HasFactory;
    protected $table = 'allproductinstock';
    protected $fillable = [
        'product_no',
        'product_barcode',
        'description',
        'stock_unit_of_measure_code',
        'reorder_point',
        'inventory',
    ];
}
