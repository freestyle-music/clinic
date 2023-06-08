<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class curency extends Model
{
    use HasFactory;
    protected $table ="curency";
    protected $fillable = [
        'id',
        'curency_no',
        'curency',
        'inactived',
        'is_deleted',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}