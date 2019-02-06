<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';
    protected $primaryKey='id';
    protected $fillable = [
        'c_name',
        'c_description',
        'c_status',
    ];

    protected function product(){
        return $this->hasMany('App\Product');
    }
}
