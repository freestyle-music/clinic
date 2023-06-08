<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiveorder extends Model
{
    use HasFactory;
    protected $table = 'receive_order';
    protected $fillable = [
        'document_no',
        'document_type',
        'description',
        'suppliyer_code',
        'curency_code',
        'inactived',
        'total_amount',
        'created_by',
        'statue',
        'updated_by',
    ];

}
