<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_voucher extends Model
{
    use HasFactory;
    protected $table = "payment_voucher";
    protected $fillable = [
        'id',
        'document_no',
        'document',
        'document_type',
        'decription',
        'totale_balanec',
        'exchane_rate',
        'currency_code',
        'paymentMethod',
        'tax',
        'dicount',
        'sub_code',
        'exchane_currency',
        'ex_totale_balanec',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}