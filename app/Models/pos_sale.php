<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pos_sale extends Model
{
    use HasFactory;
    protected $table = "Pos_Sale";
    protected $fillable = [
            'id',
            'document_no',
            'document_type',
            'product_no',
            'description',
            'line_no',
            'unit_code',
            'unit_price',
            'inventory',
            'total_amount',
            'curency_code',
            'remark',
            'statue',
            'created_by',
            'updated_by',
            'created_at',
            'updated_at'
    ];
}