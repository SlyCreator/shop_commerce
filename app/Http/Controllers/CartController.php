<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Db;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');
        $aa1 = Cart::where('session_id',$session_id)->select("quantity")->first();
       // $cart_datas=Cart::where('session_id',$session_id)->get();
        $aa = $aa1->quantity;
        dd($aa);

    }

    public function addToCart(Request $request){
        $intoCart = $request->all();
        //dd($intoCart);
        //check if product is in stock
        //this line should, contain a query to DB to select item form Database
        if(1==1){
            $session_id = Session::get('session_id');
            if(empty($session_id)){
                $session_id = $intoCart['_token'];
                if(empty($session_id)){
                    $session_id=str_random(40);
                }
                Session::put('session_id',$session_id);     
            }
            $intoCart['session_id'] = $session_id;
            //check if product is already in cart
            $check_duplicate_product = Cart::where(['product_id'=>$intoCart['product_id'],
                'product_color'=>$intoCart['product_color'],
                'size'=>$intoCart['size']])->count();
               
            if($check_duplicate_product>0){
             //i will called and add function
             $total_qty = Cart::where('session_id',$session_id)->select('quantity')->first();
             $total_qty = $intoCart['quantity'] + $total_qty ->quantity;
            // dd($total_qty);
                Cart::where(['session_id'=>$intoCart['session_id'],
                             'product_id'=>$intoCart['product_id']
                ])->update(['quantity'=>$total_qty]);
            
            
                echo "Hey Item already exist so i increase the quantity";
            }else{
            Cart::create($intoCart);
            echo "I just added Succefully Added into cart";}
   
        }else{
            return back()->with('message','Stock is not available');
        }
    }

    public function updateCart($id,$quantity){

    }
}
