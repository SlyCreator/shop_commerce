<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $rand_products = Product::inRandomOrder()->take(8)->get();
       // $products_desc =$this->productsDesc();
       // $products_asc  =$this->productsAsc();

                /*Random archieve*/
        $products_desc =Product::orderBy('p_name','desc')->take(3)->get();
        $products_asc  =Product::orderBy('p_name','asc')->take(3)->get();
        $col1_products = Product::inRandomOrder()->take(3)->get();
        $col2_products = Product::inRandomOrder()->take(3)->get();
        $col3_products = Product::inRandomOrder()->take(3)->get();

      
        return view('index')->with(compact('rand_products','products_desc','products_asc','col1_products','col2_products','col3_products'));
        //return view('index',['products'=>$products]);
    }
    /*here is actually a function that does same work with random
    public function productsDesc(){
        $products = Product::orderBy('p_name','desc')->get();
        return $products;
    }

    public function productsAsc(){
        $products = Product::orderBy('p_name','asc')->get();
        return $products;
    }
    */
    public function listbycategory(){
        $category_products = Product::inRandomOrder()->where('categories_id','1')->take(12)->get();
            return view('store')->with(compact('category_products'));
    }
}
