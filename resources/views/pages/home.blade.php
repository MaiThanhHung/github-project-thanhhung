@extends('welcome')
@section('content')

	<div class="container">
        <div class="row">
					<!-- FEATURED-PRODUCTS-AREA START -->
					<div class="featured-products-area">
						<div class="center-title-area">
							<h2 class="center-title">THỰC ĐƠN MỚI </h2>
						</div>	
						<div class="col-xs-12">
							<div class="row">
								<!-- FEARTURED-CAROUSEL START -->
								<div class="feartured-carousel">
									<!-- SINGLE-PRODUCT-ITEM START -->
                                    @foreach($all_product as $key => $product)
									<div class="item">
										<div class="single-product-item">
											<div class="product-image">
												<a href="{{URL::to('/chi-tiet/'.$product->product_id)}}"><img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="product-image" /></a>
												<a href="#" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="{{URL::to('/chi-tiet/'.$product->product_id)}}" title="Quick view"><i class="fa fa-search"></i></a></li>
														<li><a onclick="AddCart({{$product->product_id}})" href="javascript:" title="Quick view"><i class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a></li>
													</ul>
												</div>
											</div>
											<div class="product-info">
												<div class="customar-comments-box">
													<div class="rating-box">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star-half-empty"></i>
													</div>
													<div class="review-box">
														<span>1 Review (s)</span>
													</div>
												</div>
												<a href="{{URL::to('/chi-tiet/'.$product->product_id)}}">{{$product->product_name}}</a>
												<div class="price-box">
													<span class="price">{{number_format($product->product_price)}}</span>
												</div>
											</div>
										</div>							
									</div>
                                    @endforeach
																
								</div>
								<!-- FEARTURED-CAROUSEL END -->
							</div>
						</div>						
					</div>
					<!-- FEATURED-PRODUCTS-AREA END -->
				</div>
    </div>

@endsection