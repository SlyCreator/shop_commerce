<?php

namespace App\Http\Controllers;

use App\Product;
use App\Cart;
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
                    $session_id = Session::get('session_id');       
                        //check if token is passed if not set it
                        if(empty($session_id)){
                            $session_id =str_random(40);
                            Session::put('session_id', $session_id);
                        }           
                    $Insert_product['session_id'] = $session_id;
            
                    //check to see if item and it spec already exist to avoid duplicate
                    $check_duplicate = Cart::where(['product_id'=>$Insert_product['p_id'],
                                                    'color'     =>$Insert_product['p_color'],
                                                    'size'      =>$Insert_product['p_size']])->count();
                        if($check_duplicate>0){
                            echo "Item added b4";
                        }
                        Cart::create($Insert_product);
                            echo"thank you holyspirit";
                        //return back()->with('message','Added to cart');
                }else{
                    return back()->with('message','Stock is not Available');
                }
            
            
    }
}
