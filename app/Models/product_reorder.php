<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_reorder extends Model
{
    use HasFactory;
    protected $table = "product_reorder_point";
    protected $fillable = [
        'product_no',
        'description',
        'reorder_point',
        'unit_of_measure_code',
        'unit_price',
        'inventorys'
    ];
}
