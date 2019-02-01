<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $filliables = [
        'categories_id',
        'p_name',
        'p_price',
        'p_description',
        'image',
        'tags_id',
    ];

    protected function category(){
        return $this->belongsTo('App\Category');
    }
}
