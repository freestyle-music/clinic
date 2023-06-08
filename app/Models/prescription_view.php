<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prescription_view extends Model
{
    use HasFactory;
    protected $table = "view_patint_precription";
    protected $fillable = [
        'paid',
        'lstname',
        'firstname',
        'sex',
        'birstdate',
        'age',
        'allergies',
        'history_disease',
        'phone1',
        'countday',
        'days',
        'year_month',
        'years',
        'ID',
        'preid',
        'pateinid',
        "Age",
        'visit_date',
        'peple_group',
        "BP",
        "Pr",
        'rr',
        "Spo2",
        "T",
        'status',
        'appointment_date',
        'remark',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}