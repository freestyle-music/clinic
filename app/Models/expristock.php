<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class expristock extends Model
{
    use HasFactory;
    protected $table = "product_stock_exprit_date";
    protected $fillable = [
        'product_no',
        'exprit_date',
        'description',
        'reorder_point',
        'unit_of_measure_code',
        'unit_price',
        'inventorys',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}