<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $products = Product::inRandomOrder()->take(4)->get();
        return view('index',['products'=>$products]);
    }
}
