<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permittion_role extends Model
{
    use HasFactory;
    protected $table = "permission_role";
    protected $fillable = [
        'id',
        'role',
        'permission',
        'description',
        'created_by',
        'updated_by'
    ];
}