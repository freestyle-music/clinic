<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class unitofmeasure extends Model
{
    use HasFactory;
    protected $table = "product_unit_of_measure";
    protected $fillable = [
        'code',
        'unit_code',
        'unit_of_measure',
        'type',
        'inactived',
        'created_by',
        'updated_by',
    ];
}