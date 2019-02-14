<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Cart;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index(){
        $rand_products = $this->fetch_at_Random(6);
        $products_asc  =$this->products_in_asc(3);
        $products_desc =$this->products_in_desc(3);

                /*Random archieve*/
        $col1_products =$this->fetch_at_Random(3);
        $col2_products =$this->fetch_at_Random(3);
        $col3_products =$this->fetch_at_Random(3);

                    //fecth the cart
       $session_id=Session::get('session_id');
        $cart = Cart::where('session_id',$session_id)->select("quantity")->first();
        
      
        return view('index')->with(compact('rand_products','products_desc','products_asc','col1_products','col2_products','col3_products'));
        //return view('index',['products'=>$products]);
    }

    public function listbycategory(){
        $category_products = Product::inRandomOrder()->where('categories_id','1')->take(12)->get();
            return view('store')->with(compact('category_products'));
    }

    public function productdetail($id){
        $product_detail = Product::findOrFail($id);
        $rand_products1 = $this->fetch_at_Random(2);
        $rand_products2 = $this->fetch_at_Random(2);
            //return $product_detail;
            return view('product')->with(compact('product_detail','rand_products1','rand_products2'));
    }
    /*here is actually a function that does same work with random*/

    public function products_in_asc($amount){
        $products = Product::orderBy('p_name','asc')->take($amount)->get();
        return $products;
    }

    public function products_in_desc($amount){
        $products = Product::orderBy('p_name','desc')->take($amount)->get();
        return $products;
    }

    public function fetch_at_Random($amount){
        $products = Product::inRandomOrder()->take($amount)->get();
        return $products;
    }

   
  
}
