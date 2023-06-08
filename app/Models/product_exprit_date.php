<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_exprit_date extends Model
{
    use HasFactory;
    protected $table = "product_exprit_date";
    protected $fillable = [
        'product_no',
        'exprit_date',
        'description',
        'reorder_point',
        'unit_of_measure_code',
        'unit_price',
        'inventorys'
    ];
}
