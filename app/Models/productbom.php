<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productbom extends Model
{
    use HasFactory;
    protected $table = "product_bom";
    protected $fillable = [
        'id',
        'product_no',
        'boom_product_id',
        'description',
        'bom_unit_of_measure_code',
        'quantity_per_unit',
        'quantity',
        'inactived',
        'is_deleted',
        'created_by',
        'updated_by'
    ];
}