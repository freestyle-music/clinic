<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class permittion extends Model
{
    use HasFactory;
    protected $table = "permission";
    protected $fillable = [
        'id',
        'permission',
        'description',
        'created_by',
        'updated_by'
    ];
}