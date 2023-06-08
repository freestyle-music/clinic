<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Serail extends Model
{
    use HasFactory;
    protected $table = "serail_code";
    protected $fillable = [
        'id',
        'serail_code',
        'prefix_code',
        'qty_code',
        'start_code',
        'end_code',
        'created_by',
        'updated_by',
    ];
}