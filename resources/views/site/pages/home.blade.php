@extends('site/layouts/app')

@section('content')
  <!--content-->

<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[0]['image_url'] }}" alt="" />
						</a>
                        <h3><a href="single.html">{{ $products[0]['product_name'] }}</a></h3>
						<div class="price">
                            <h5 class="item_price"> $ {{ number_format($products[0]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="col-md-6 animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
					<div class="col-md3">
						<div class="up-t">
							<h3>Flat 50% Offer</h3>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[1]['image_url'] }}" alt="" />
						</a>
						<h3><a href="single.html">{{ $products[1]['product_name'] }}</a></h3>
						<div class="price">
								<h5 class="item_price">$ {{ number_format($products[1]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
			</div>
			<div class="content-top1">
				<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[2]['image_url'] }}" alt="" />
						</a>
						<h3><a href="single.html">{{ $products[2]['product_name'] }}</a></h3>
						<div class="price">
								<h5 class="item_price">$ {{ number_format($products[2]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[3]['image_url'] }}" alt="" />
						</a>
						<h3><a href="single.html">{{ $products[3]['product_name'] }}</a></h3>
						<div class="price">
								<h5 class="item_price">$ {{ number_format($products[3]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[4]['image_url'] }}" alt="" />
						</a>
						<h3><a href="single.html">{{ $products[4]['product_name'] }}</a></h3>
						<div class="price">
								<h5 class="item_price">$ {{ number_format($products[4]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="col-md-3 col-md2 cmn animated wow fadeInRight" data-wow-delay=".5s">
					<div class="col-md1 simpleCart_shelfItem">
						<a href="single.html">
							<img class="img-responsive" src="{{ $products[5]['image_url'] }}" alt="" />
						</a>
						<h3><a href="single.html">{{ $products[5]['product_name'] }}</a></h3>
						<div class="price">
								<h5 class="item_price">$ {{ number_format($products[5]['priceper'], 2, ',', '.') }}</h5>
								<a href="#" class="item_add">Add To Cart</a>
								<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//content-->

<div class="con-tp">
  <div class="container">
    <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
      <a href="products.html">
        <div class="content-grid-effect slow-zoom vertical">
          <div class="img-box"><img src="images/6.jpg" alt="image" class="img-responsive zoom-img"></div>
          <div class="info-box">
            <div class="info-content simpleCart_shelfItem">
                  <h4>30%offer</h4>
            </div>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 con-tp-lft animated wow fadeInDown animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
      <a href="products.html">
        <div class="content-grid-effect slow-zoom vertical">
          <div class="img-box"><img src="images/10.jpg" alt="image" class="img-responsive zoom-img"></div>
            <div class="info-box">
              <div class="info-content simpleCart_shelfItem">
                  <h4>45%offer</h4>
              </div>
            </div>
        </div>
      </a>
    </div>
    <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
      <a href="products.html">
        <div class="content-grid-effect slow-zoom vertical">
          <div class="img-box"><img src="images/9.jpg" alt="image" class="img-responsive zoom-img"></div>
            <div class="info-box">
              <div class="info-content simpleCart_shelfItem">
                  <h4>50%offer</h4>
              </div>
            </div>
        </div>
      </a>
    </div>
    <div class="clearfix"></div>
  <div class="col-md-4 con-tp-lft animated wow fadeInLeft" data-wow-delay=".5s">
    <a href="products.html">
      <div class="content-grid-effect slow-zoom vertical">
        <div class="img-box"><img src="images/12.jpg" alt="image" class="img-responsive zoom-img"></div>
          <div class="info-box">
            <div class="info-content simpleCart_shelfItem">
                <h4>25%offer</h4>
            </div>
          </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 con-tp-lft animated wow fadeInUp animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
    <a href="products.html">
      <div class="content-grid-effect slow-zoom vertical">
        <div class="img-box"><img src="images/13.jpg" alt="image" class="img-responsive zoom-img"></div>
          <div class="info-box">
            <div class="info-content simpleCart_shelfItem">
                <h4>50%offer</h4>
            </div>
          </div>
      </div>
    </a>
  </div>
  <div class="col-md-4 con-tp-lft animated wow fadeInRight" data-wow-delay=".5s">
    <a href="products.html">
      <div class="content-grid-effect slow-zoom vertical">
        <div class="img-box"><img src="images/14.jpg" alt="image" class="img-responsive zoom-img"></div>
          <div class="info-box">
            <div class="info-content simpleCart_shelfItem">
                <h4>35%offer</h4>
            </div>
          </div>
      </div>
    </a>
  </div>
  <div class="clearfix"></div>
  </div>
</div>
<div class="c-btm">
    <div class="content-top1">
        <div class="container">
            @for($var = 0; $var < 4; $var ++)
                <div class="col-md-3 col-md2 animated wow fadeInLeft" data-wow-delay=".5s">
                    <div class="col-md1 simpleCart_shelfItem">
                        <a href="single.html">
                            <img class="img-responsive" src="{{ $products[$var]['image_url'] }}" alt="" />
                        </a>
                        <h3><a href="single.html">{{ $products[$var]['product_name'] }}</a></h3>
                        <div class="price">
                            <h5 class="item_price">${{ number_format($products[$var]['priceper'], 2, ',', '.') }}</h5>
                            <a href="#" class="item_add">Add To Cart</a>
                            <div class="clearfix"> </div>
                        </div>

                    </div>
                </div>
            @endfor
            <div class="clearfix"> </div>
        </div>
    </div>
</div>

@endsection
