<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purchese_user extends Model
{
    use HasFactory;
    protected $table = 'purchese_user_view';
    protected $fillable = [
    'document_no',
    'id',
    'user_code',
    'kikan_id',
    'group_id',
    'user_name',
    'user_kana',
    'ryaku',
    'syoku',
    'sort_no',
    'jokin',
    'katudo',
    'work_start_date',
    'work_end_date',
    'syozok_kbn',
    'tel',
    'zip',
    'address',
    'birthday',
    'sex',
    'del_flg',
    'created_user_id',
    'updated_user_id',
    'code1',
    'created_at',
    'updated_by'
    ];
}