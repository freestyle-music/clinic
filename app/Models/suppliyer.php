<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suppliyer extends Model
{
    use HasFactory;
    protected $table = "suppliyer";
    protected $fillable = [
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
        'updated_by',
    ];
}