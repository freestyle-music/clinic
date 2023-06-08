<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stocktransaction extends Model
{
    use HasFactory;
    protected $table = 'stock_transaction';
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'product_no',
        'description',
        'unit_of_measure_code',
        'unit_price',
        'inventory',
        'total_amount',
        'curency_code',
        'remark',
        'created_by',
        'created_at',
        'updated_at'
        
    ];
}
