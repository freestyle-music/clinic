<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stockkeeping extends Model
{
    use HasFactory;
    protected $table = 'product_stock_keeping_units';
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'product_no',
        'description',
        'issu_date',
        'exprit_date',
        'line_no',
        'unit_of_measure_code',
        'unit_price',
        'inventory',
        'inventory_new',
        'inventory_old',
        'curency_code',
        'remark',
        'statuse',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'

    ];
}