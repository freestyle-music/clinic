<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchealine extends Model
{
    use HasFactory;
    protected $table = 'purchea_line';
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'product_no ',
        'description',
        'issu_date',
        'exprit_date',
        'line_no',
        'unit_of_measure_code',
        'unit_price',
        'inventory',
        'inventory_order',
        'inventory_recetive',
        'total_amount',
        'curency_code',
        'remark',
        'statue',
        'created_by',
        'updated_by',
    ];
}