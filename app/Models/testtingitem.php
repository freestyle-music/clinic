<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testtingitem extends Model
{
    use HasFactory;
    protected $table ="labotest";
    protected $fillable = [
        'id',
        'product_no',
        'product_type',
        'description',
        'test_type',
        'normal_value',
        'status',
        'remark',
        'created_by',
        'delete_by',
        'created_at',
        'updated_at'
    ];
}