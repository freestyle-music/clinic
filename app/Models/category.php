<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table ="product_category";
    protected $fillable = [
        'id',
        'cat_code',
        'cat_name',
        'cat_name_2',
        'created_by',
        'inactived',
        'updated_by'
    ];

    public function category()
    {
        return $this->belongsTo(Post::class, 'id');
    }
}