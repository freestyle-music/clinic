<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'Sale';
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'pre_id',
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