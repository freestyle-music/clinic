<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_store extends Model
{
    use HasFactory;
    protected $table = "product_reoderpoint_view";
    protected $fillable = [
        'product_no',
        'description',
        'reorder_point',
        'unit_of_measure_code',
        'unit_price',
        'inventorys'
    ];
}
