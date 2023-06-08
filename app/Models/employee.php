<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class employee extends Model
{
    use HasFactory;
    protected $table ="employee";
    protected $fillable = [
        'id',
        'lstname',
        'firstname',
        'birstdate',
        'sex',
        'phone1',
        'phone2', 
        'email',
        'hiredate',
        'address',
        'address2',
        'village',
        'commune',
        'district',
        'pro_city',
        'region',
        'remark',
        'status',
        'created_by',
        'updated_by'
    ];
}