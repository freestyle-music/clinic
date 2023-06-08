<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paymentMethod extends Model
{
    use HasFactory;
    protected $table = "paymentmethod";
    protected $fillable = [
        'id',
        'paymentmethod_code',
        'paymentmethod',
        'description',
        'inactived',
        'statue',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
        
    ];
}