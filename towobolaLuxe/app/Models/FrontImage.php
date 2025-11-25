<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FrontImage extends Model
{
    protected $fillable = [
        'image',
        'user_id'
    ];
}
