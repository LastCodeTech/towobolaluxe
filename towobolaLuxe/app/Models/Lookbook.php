<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lookbook extends Model
{
    protected $fillable = [
        'collection_name',
        'description',
        'category_id',
        'image',
        'video'
    ];


    public function category(){
        return $this->belongsTo(category::class);
    }
}
