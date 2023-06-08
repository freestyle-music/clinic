<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purcheas_order_view extends Model
{
    use HasFactory;
    protected $table ="purchea_order_view";
    protected $fillable = [
          'document_no',
          'document_type',
          'description',
          'suppliyer_code',
          'curency_code',
          'inactived',
          'is_deleted',
          'created_by',
          'delete_by',
          'created_at',
          'updated_at',
          'sup_name',
          'sup_name_2',
          'address',
          'phone_no',
          'phone_no_2',
          'email',
          'contact_name',
          'contact_phone',
          'thumbnail'
    ];  
}
