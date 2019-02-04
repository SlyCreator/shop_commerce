@extends('layouts.layout')

@section('content')
	
			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- shop -->
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/sh1.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Wrist Watch<br>Collection</h3>
									<a href="/wrist-watch/" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
	
						<!-- shop -->
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/sh4.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Accessories<br>Collection</h3>
									<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
	
						<!-- shop -->
						<div class="col-md-4 col-xs-6">
							<div class="shop">
								<div class="shop-img">
									<img src="./img/sh2.png" alt="">
								</div>
								<div class="shop-body">
									<h3>Beauty<br>Collection</h3>
									<a href="#" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
								</div>
							</div>
						</div>
						<!-- /shop -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->
	
			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
	
						<!-- section title -->
						<div class="col-md-12">
							<div class="section-title">
								<h3 class="title">New Products</h3>
								<div class="section-nav">
									<ul class="section-tab-nav tab-nav">
										<li class="active"><a data-toggle="tab" href="#tab1">Wrist watches</a></li>
										<li><a data-toggle="tab" href="#tab1">Beauty Product</a></li>
										
									</ul>
								</div>
							</div>
						</div>
						<!-- /section title -->
	
						<!-- Products tab & slick -->
						<div class="col-md-12">
							
							<div class="row">
								<div class="products-tabs">
									<!-- tab -->
									<div id="tab1" class="tab-pane active">
										<div class="products-slick" data-nav="#slick-nav-1">
												@foreach ($rand_products as $product)
								
											
											<!-- product -->
											<div class="product">
												<div class="product-img">
													
													<img src="./img/{{$product->image}}" alt="">
													<div class="product-label">
														<span class="sale">-30%</span>
														<span class="new">NEW</span>
													</div>
												</div>
												<div class="product-body">
													<p class="product-category">Category</p>
													<h3 class="product-name"><a href="/wrist-watch/{{$product->id}}">{{$product->p_name}}</a></h3>
													<h4 class="product-price">{{$product->p_price}}<del class="product-old-price">$990.00</del></h4>
													<div class="product-rating">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>
													<div class="product-btns">
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</div>
											<!-- /product -->
	
											@endforeach						
										
										</div>
										<div id="slick-nav-1" class="products-slick-nav"></div>
									</div>
									<!-- /tab -->
								</div>
							</div>
						</div>
						<!-- Products tab & slick -->
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->
	
			<!-- HOT DEAL SECTION -->
			<div id="hot-deal" class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12">
							<div class="hot-deal">
								<ul class="hot-deal-countdown">
									<li>
										<div>
											<h3>02</h3>
											<span>Days</span>
										</div>
									</li>
									<li>
										<div>
											<h3>10</h3>
											<span>Hours</span>
										</div>
									</li>
									<li>
										<div>
											<h3>34</h3>
											<span>Mins</span>
										</div>
									</li>
									<li>
										<div>
											<h3>60</h3>
											<span>Secs</span>
										</div>
									</li>
								</ul>
								<h2 class="text-uppercase">hot deal this week</h2>
								<p>New Collection Up to 50% OFF</p>
								<a class="primary-btn cta-btn" href="#">Shop now</a>
							</div>
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /HOT DEAL SECTION -->
	
			
	
			<!-- SECTION -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Top selling Brand</h4>
								<div class="section-nav">
									<div id="slick-nav-3" class="products-slick-nav"></div>
								</div>
							</div>
	
							<div class="products-widget-slick" data-nav="#slick-nav-3">
									<div>
											@foreach ($col1_products as $col1)
												
											
												<!-- product widget -->
												<div class="product-widget">
													<div class="product-img">
													<img src="./img/{{$col1->image}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="/wrist-watch/{{$col1->id}}">{{$col1->p_name}}</a></h3>
													<h4 class="product-price">{{$col1->p_price}}<del class="product-old-price">$990.00</del></h4>
													</div>
												</div>
												<!-- /product widget -->
											@endforeach
			
										</div>
			
										<div>
												@foreach ($products_desc as $col1)
												
											
												<!-- product widget -->
												<div class="product-widget">
													<div class="product-img">
													<img src="./img/{{$col1->image}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="/wrist-watch/{{$col1->id}}">{{$col1->p_name}}</a></h3>
													<h4 class="product-price">{{$col1->p_price}}<del class="product-old-price">$990.00</del></h4>
													</div>
												</div>
												<!-- /product widget -->
											@endforeach
									
										</div>
	
							</div>
						</div>
	
						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Top selling This week</h4>
								<div class="section-nav">
									<div id="slick-nav-4" class="products-slick-nav"></div>
								</div>
							</div>
	
							<div class="products-widget-slick" data-nav="#slick-nav-4">
									<div>
											@foreach ($products_desc as $col2)
												
											
												<!-- product widget -->
												<div class="product-widget">
													<div class="product-img">
													<img src="./img/{{$col2->image}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="/wrist-watch/{{$col2->id}}">{{$col2->p_name}}</a></h3>
													<h4 class="product-price">{{$col2->p_price}}<del class="product-old-price">$990.00</del></h4>
													</div>
												</div>
												<!-- /product widget -->
											@endforeach
			
										</div>
			
										<div>
												@foreach ($col2_products as $col2)
												
											
												<!-- product widget -->
												<div class="product-widget">
													<div class="product-img">
													<img src="./img/{{$col2->image}}" alt="">
													</div>
													<div class="product-body">
														<p class="product-category">Category</p>
														<h3 class="product-name"><a href="/wrist-watch/{{$col2->id}}}">{{$col2->p_name}}</a></h3>
													<h4 class="product-price">{{$col2->p_price}}<del class="product-old-price">$990.00</del></h4>
													</div>
												</div>
												<!-- /product widget -->
											@endforeach
									
										</div>
							</div>
						</div>
	
						<div class="clearfix visible-sm visible-xs"></div>
	
						<div class="col-md-4 col-xs-6">
							<div class="section-title">
								<h4 class="title">Last</h4>
								<div class="section-nav">
									<div id="slick-nav-5" class="products-slick-nav"></div>
								</div>
							</div>
	
							<div class="products-widget-slick" data-nav="#slick-nav-5">
								<div>
									@foreach ($col3_products as $col3)
										
									
										<!-- product widget -->
										<div class="product-widget">
											<div class="product-img">
											<img src="./img/{{$col3->image}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="/wrist-watch/{{$col3->id}}">{{$col3->p_name}}</a></h3>
											<h4 class="product-price">{{$col3->p_price}}<del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product widget -->
									@endforeach
	
								</div>
	
								<div>
										@foreach ($products_asc as $col3)
										
									
										<!-- product widget -->
										<div class="product-widget">
											<div class="product-img">
											<img src="./img/{{$col3->image}}" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name"><a href="/wrist-watch/{{$col3->id}}">{{$col3->p_name}}</a></h3>
											<h4 class="product-price">{{$col3->p_price}}<del class="product-old-price">$990.00</del></h4>
											</div>
										</div>
										<!-- /product widget -->
									@endforeach
							
								</div>
							</div>
						</div>
	
					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /SECTION -->

@endsection



