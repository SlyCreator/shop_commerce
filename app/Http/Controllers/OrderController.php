<?php

namespace App\Http\Controllers;

use App\Category;
use App\Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function checkout_page(){
        $session_id=Session::get('session_id');
        $cart = Cart::where('session_id',$session_id)->get();

    return view('checkout')->with(compact('cart'));
       

    }
}
