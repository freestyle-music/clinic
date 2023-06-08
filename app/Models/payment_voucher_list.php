<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_voucher_list extends Model
{
    use HasFactory;
    protected $table = "payment_voucher_list";
    protected $fillable = [
        'id',
        'document_no',
        'document',
        'payment_no',
        'decription',
        'exchane_rate',
        'totale_balanec',
        'payment_amount',
        'dicount',
        'currency_code',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at',
        'sale_id'
    ];
}