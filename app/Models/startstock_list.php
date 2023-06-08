<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class startstock_list extends Model
{
    use HasFactory;
    protected $table ="beginingstock_lint";
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'product_no',
        'description',
        'issu_date',
        'exprit_date',
        'unit_of_measure_code',
        'unit_price',
        'inventory',
        'total_amount',
        'curency_code',
        'remark',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}