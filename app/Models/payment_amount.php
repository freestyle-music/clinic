<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_amount extends Model
{
    use HasFactory;
    protected $table = "payment_amount";
    protected $fillable = [
        'id',
        'document_no',
        'document',
        'document_type',
        'decription',
        'totale_balanec',
        'exchane_rate',
        'currency_code',
        'paymant_amount',
        'inactived',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}