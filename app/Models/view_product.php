<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view_product extends Model
{
    use HasFactory;
    protected $table = "product_view";
    protected $fillable = [
        'product_no',
        'product_barcode',
        'description_2',
        'stock_unit',
        'purche_unit',
        'inactived',
        'image_url'
    ];
}
