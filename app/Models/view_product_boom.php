<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class view_product_boom extends Model
{
    use HasFactory;

    protected $table ="product_view_boom";
    protected $fillable = [
        'id',
        'product_no',
        'description'
    ];   
}
