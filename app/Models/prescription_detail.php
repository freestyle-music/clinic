<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_list extends Model
{
    use HasFactory;
    protected $table = "prescrition_list";
    protected $fillable = [
        'preId',
        'product_no',
        'product_type',
        'price',
        'status',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}