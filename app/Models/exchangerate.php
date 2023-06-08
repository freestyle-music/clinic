<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class exchangerate extends Model
{
    use HasFactory;
    protected $table ="exchange_rate";
    protected $fillable = [
        'id',
        'main_curency_no',
        'curency_no',
        'exchange_rate',
        'inactived',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}