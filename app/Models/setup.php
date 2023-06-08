<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setup extends Model
{
    use HasFactory;
    protected $table = "SetUp";
    protected $fillable = [
        'id',
        'company_name',
        'company_Address',
        'company_Phone',
        'company_Email',
        'main_Currency',
        'product_check',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}