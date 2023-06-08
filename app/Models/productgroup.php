<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productgroup extends Model
{
    use HasFactory;
    protected $table = "product_group";
    protected $fillable = [
        'id',
        'group_code',
        'group_name',
        'image_url',
        'group_name_2',
        'brand_code',
        'cat_code',
        'inactived',
        'is_deleted',
        'created_by',
        'updated_by'
    ];
    public function productgroup()
    {
        return $this->belongsTo(Post::class, 'group_code');
    }
}