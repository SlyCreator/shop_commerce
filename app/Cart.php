<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $primaryKey='id';
    protected $fillable=[
        'product_id',
        'product_color',
        'size',
        'price',
        'quantity',
        'session_id'
       
    ];
 
}
