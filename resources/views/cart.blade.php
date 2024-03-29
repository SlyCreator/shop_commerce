<?php use \App\Product; ?>
@extends('layouts.layout')

@section('content')
		<!-- BREADCRUMB -->
		<div id="breadcrumb" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h3 class="breadcrumb-header">View Cart</h3>
						<ul class="breadcrumb-tree">
							<li><a href="#">Home</a></li>
							<li class="active">view cart</li>
						</ul>
					</div>
				</div>
                <!-- /row -->
                
                <!--cart Table-->
                <div class="row col-xl-10 col-lg-8 col-md-6 ml-auto">
                    
                    <table class="table ">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>color</th>
                                <th>size</th>
                                <th>quantity</th>
                                <th>Price</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        @foreach ($cart as $product)
                        <tbody>
                            <tr> 
                                <td>{{Product::getProductName($product->product_id)}}</td>
                                @if($product->product_color == NULL)
                                <td>default</td>
                                @else
                                    <td>{{$product->product_color}}</td>
                                @endif
                                @if($product->size == NULL)
                                <td>default</td>
                                @else
                                    <td>{{$product->size}}</td>
                                @endif
                                <td>
                                        <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$product->product_id.'/1')}}"> + </a>
                                    <input type="text" value="{{$product->quantity}}" size="2">
                                    @if($product->quantity>1)
                                    <a class="cart_quantity_up" href="{{url('/cart/update-quantity/'.$product->product_id.'/-1')}}"> - </a>
                                    @endif
                                </td>
                                <td>{{$product->price}}</td>
                                
                                <td><a class="btn btn-danger" href="cart/removeItem/{{$product->id}}">x</a></td>
                               
                            </tr>
                        </tbody>
                        @endforeach
                       
                    </table>
                    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
                    <a href="{{route('Checkoutpage')}}" class="btn btn-warning">Continue Checkout</a>
                </div>
                 <!--cart Table-->
			</div>
			<!-- /container -->
		</div>
		<!-- /BREADCRUMB -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->
	
@endsection
	

	