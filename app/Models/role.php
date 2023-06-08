<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;
    protected $table = 'role';
    protected $fillable = [
                'id',
                'role',
                'description',
                'created_by',
                'updated_by',
    ];
}