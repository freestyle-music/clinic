<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class viewpatintprecription extends Model
{
    use HasFactory;
    protected $table ="view_patint_precription";
    protected $fillable = [
        'paid',
        'lstname',
        'firstname',
        'sex',
        'birstdate',
        'regage',
        'id',
        'preid',
        'pateinid',
        'Age',
        'Date',
        'BP',
        'Pr',
        'rr',
        'Spo2',
        'T',
        'status',
        'Datemet',
        'remark',
        'created_by',
        'updated_by',
        'created_at',
        'updated_at'
    ];
}