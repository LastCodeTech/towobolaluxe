<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Towobolaluxe extends Model
{
    protected $fillable = [
        'collectionName',
        'description',
        'category_id',
        'status'
    ];

    protected $casts = [
        'status' => 'boolean'
    ];

    public function category(){
        return $this->hasMany(category::class);
    }
 
}
