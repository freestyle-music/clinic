<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class startstock extends Model
{
    use HasFactory;
    protected $table ="beginingstock";
    protected $fillable = [
        'id',
        'document_no',
        'document_type',
        'description',
        'total_amount',
        'curency_code',
        'inactived',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}