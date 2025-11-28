<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FittingForm extends Model
{
    protected $fillable = [
        'values',
        'fittingcategory_id',
        'user_id',
        'chart'
    ];

    protected $casts = [
        'values' => 'array',
        'chart'=>'array'
    ];
}
