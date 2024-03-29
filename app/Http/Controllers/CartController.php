<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index(){
        $session_id=Session::get('session_id');
        $cart = Cart::where('session_id',$session_id)->get();

      // $total_qty=0;

    return view('cart')->with(compact('cart'));
       

    }

    public function addToCart(Request $request){
        $intoCart = $request->all();
        //dd($intoCart);
        //check if product is int stock
        //this line should, contain a query to DB to select item form Database
        if(1==1){
            $session_id = Session::get('session_id');
            if(empty($session_id)){
                $session_id = $intoCart['_token'];
                //This is to confirm if token was passed
                /*if(empty($session_id)){
                    $session_id=str_random(40);
                }*/
                Session::put('session_id',$session_id);     
            }
            $intoCart['session_id'] = $session_id;
            //check if product is already in cart
            $check_duplicate_product = Cart::where([
                'session_id'=>$intoCart['session_id'],
                'product_id'=>$intoCart['product_id'],
                'product_color'=>$intoCart['product_color'],
                'size'=>$intoCart['size']])->count();
                
            if($check_duplicate_product>0){
             $total_qty=Cart::select('quantity')->where([
                'session_id'=>$intoCart['session_id'],
                'product_id'=>$intoCart['product_id'],
                'product_color'=>$intoCart['product_color'],
                'size'=>$intoCart['size']])->first();

             $total_qty = $intoCart['quantity'] + $total_qty->quantity;
             Cart::where([
                'session_id'=>$intoCart['session_id'],
                'product_id'=>$intoCart['product_id']])->update(['quantity'=>$total_qty]);
                return back()->with('message','Hey Item already exist so i increase the quantity');
            }else{
                Cart::create($intoCart);
                return back()->with('message','Item have been added to cart Successfully');
            }
   
        }else{
            return back()->with('message','Stock is not available');
        }
    }

    public function updateCart($id,$qty){
        //check if the amount needed is available
        $update_qty = Cart::where(['product_id'=>$id]);
             echo $update_qty->quantity;

   
            //return back()->with('message','Stock is not availble');

    }

    public function removeItem($id){
        $delete_item=Cart::findOrFail($id);
        $delete_item->delete();
        return back()->with('message','item removed successfully');
    }
    
    public static function getProductName($id)
    {
        $product_name= Product::where('id',$id)->first();
        return $product_name->p_name;
    }
}
