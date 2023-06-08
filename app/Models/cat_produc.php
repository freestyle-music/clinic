<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat_produc extends Model
{
    use HasFactory;
    use HasFactory;
    protected $table ="product_cat_view";
    protected $fillable = [
    'product_no',
    'id',
    'sup_code',
    'sup_name',
    'sup_name_2',
    'image_url',
    'address',
    'phone_no',
    'phone_no_2',
    'fax_no',
    'email',
    'contact_name',
    'contact_phone',
    'thumbnail',
    'status',
    'inactived',
    'is_deleted',
    'created_by',
    'updated_by',
    'created_at',
    'updated_at'
    ];
}