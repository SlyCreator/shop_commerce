<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $rand_products = Product::inRandomOrder()->take(8)->get();
        $products_asc  =$this->products_in_asc();
        $products_desc =$this->products_in_desc();

                /*Random archieve*/
        $col1_products =$this->threeRandom();
        $col2_products =$this->threeRandom();
        $col3_products =$this->threeRandom();

      
        return view('index')->with(compact('rand_products','products_desc','products_asc','col1_products','col2_products','col3_products'));
        //return view('index',['products'=>$products]);
    }

    public function listbycategory(){
        $category_products = Product::inRandomOrder()->where('categories_id','1')->take(12)->get();
            return view('store')->with(compact('category_products'));
    }

    public function productdetail($id){
        $product_detail = Product::findOrFail($id);
        $rand_products1 = Product::inRandomOrder()->take(2)->get();
        $rand_products2 = Product::inRandomOrder()->take(2)->get();
            //return $product_detail;
            return view('product')->with(compact('product_detail','rand_products1','rand_products2'));
    }
    /*here is actually a function that does same work with random*/

    public function products_in_asc(){
        $products = Product::orderBy('p_name','asc')->take(3)->get();
        return $products;
    }

    public function products_in_desc(){
        $products = Product::orderBy('p_name','desc')->take(3)->get();
        return $products;
    }

    public function threeRandom(){
        $products = Product::inRandomOrder()->take(3)->get();
        return $products;
    }

    public function twelveRandom(){
        $products =Product::inRandomOrder()->take(8)->get();
        return $products;
    }


    

   
    
  
}
