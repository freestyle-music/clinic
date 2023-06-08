<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock_count extends Model
{
    use HasFactory;
    protected $table = "stock-count";
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'description',
        'total_amount',
        'curency_code',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}