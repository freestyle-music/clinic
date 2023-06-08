<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicetest_view extends Model
{
    use HasFactory;
    protected $table = "servicetest_view";
    protected $fillable = [
        'id',
        'product_no',
        'description',
        'type',
        'group_code',
        'cate_code',
        'unit_price',
        'inactived',
        'test_type',
        'normal_value',
        'status'
    ];
}
