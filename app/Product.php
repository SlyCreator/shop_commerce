<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $primaryKey= 'id';
    protected $fillable = [
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

    protected function carts(){
        return $this->belongsTo('App\Cart');
    }

    public static function getProductName($id)
    {
        $product_name= Product::where('id',$id)->first();
        return $product_name->p_name;
    }
}
