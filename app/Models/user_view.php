<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user_view extends Model
{
    use HasFactory;
    protected $table = "user_view";
    protected $fillable = [
        'id',
        'user_code',
        'user_name',
        'password',
        'email',
        'role',
        'statue',
        'created_by',
        'delete_by',
        'lstname',
        'firstname',
        'birstdate',
        'sex',
        'phone1',
        'phone2',
        'em_email',
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
        'created_at',
        'updated_at'
    ];
}
