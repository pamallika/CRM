<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cost',
        'company_id',
        'pipeline_id',
        'stage_id',
        'user_id',
        'account_id',
    ];
}
