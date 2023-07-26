<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pateint extends Model
{
    use HasFactory;
    protected $table ="pateint";
    protected $fillable = [
        'id',
        'pateinid',
        'lstname',
        'firstname',
        'birstdate',
        'sex',
        'age',
        'allergies',
        'history_disease',
        'phone1',
        'phone2',
        'email',
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

    public function calendar() {
        $result = pateint::all();
        $value = $result->find(1);
        return view('calendar', compact('result', 'value'));
    }
}