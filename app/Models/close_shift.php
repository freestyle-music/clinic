<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class close_shift extends Model
{
    use HasFactory;
    protected $table ="close_shift";
    protected $fillable = [
        'id',
        'description',
        'deposit',
        'deposit2',
        'curency_code',
        'curency_code2',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}