<?php

namespace App\Models;

use Doctrine\DBAL\Schema\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class purcheaorder extends Model
{
    use HasFactory;
    protected $table = 'purchea_order';
    protected $fillable = [
        'document_no',
        'document_type',
        'description',
        'suppliyer_code',
        'curency_code',
        'inactived',
        'total_amount',
        'is_deleted',
        'statue',
        'created_by',
        'updated_by',
    ];
}