<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment_sub extends Model
{
    use HasFactory;
     protected $table = "payment_sub_view";
    protected $fillable = [
            'document_no',
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
            'created_by',
            'updete_by',
            'updated_by',
            'created_at',
            'updated_at'
    ];
}