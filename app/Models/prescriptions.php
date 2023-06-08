<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescriptions extends Model
{
    use HasFactory;
    protected $table = "prescriptions";
    protected $fillable = [
            'preid',
            'pateinid',
            'age',
            'visit_date',
            'bp',
            'pr',
            'rr',
            'spo2',
            't',
            'height',
            'width',
            'status',
            'appointment_date',
            'remark',
            'created_by',
            'updated_by',
    ];
}
    