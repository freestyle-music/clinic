<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_count_line extends Model
{
    use HasFactory;
    protected $table = "stock_line_count";
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'product_no',
        'description',
        'line_no',
        'unit_of_measure_code',
        'unit_price',
        'inventory',
        'inventory_count',
        'inventory_new',
        'qty_balance',
        'amount_balance',
        'total_amount',
        'curency_code',
        'remark',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'    
    ];
}