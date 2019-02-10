<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){

    }

    public function addToCart(Request $request){
            $Insert_product = request()->all();

                //check if item is still in stock
                 if(1==1){

                    //get the session id or the token pass
                    $session_id = Session::get('session_id');
                    if(empty($session_id)){
                        $session_id = $Insert_product['_token'];
                        //check if token was pass
                        if(empty($session_id)){
                            $session_id =str_random(40);
                        }
                        Session::put('session_id',$session_id);
                    }
                   $Insert_product['session_id'] = $session_id;
                   $Insert_product['size']= $size;
                   //check to see if item and it spec already exist to avoid duplicate
                   $check_duplicate = Cart::where(['']);


                    //return back()->with('message','Added to cart');
                }else{
                    return back()->with('message','Stock is not Available');
                }
            
            
    }
}
