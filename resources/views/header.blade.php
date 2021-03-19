<!--trang hien phan dau trang header(dchi + logobook,icon timkiem + thanh menu)-->
<div id="header">
		<div class="header-top">
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i> 338 Xã Đàn, Phương Liên, Đống Đa, Hà Nội</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0123 545 159</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
						<li><a href="#"><i ></i></a></li><!-- tai khoan -->
						<li><a href="#"></a></li><!-- dang ki sign up-->
						<li><a href="#"></a></li><!-- dang nhap login -->
					</ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->
		<div class="header-body">
			<div class="container beta-relative">
				<div class="pull-left">
					<a href="{{route('trang-chu')}}" id="logo"><img src="source/assets/dest/images/redbook.jpg" width="200px" alt=""></a><!-- nhan vao logobook, se den home-->
				</div>
				<div class="pull-right beta-components space-left ov">
					<div class="space10">&nbsp;</div>
					<div class="beta-comp">
<!-- thanh tim kiem -->
						<form role="search" method="get" id="searchform" action="{{route('search')}}">
					        <input type="text" value="" name="key" id="s" placeholder="Search..." />
					        <button class="fa fa-search" type="submit" id="searchsubmit"></button>
						</form>
					</div>
<!-- chua lam: thanh gio hang cart -->
					<div class="beta-comp">
					@if(Session::has('cart'))
						<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (@if(Session::has('cart')) {{Session('cart')->totalQty}} @else Trong @endif) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
								
								@foreach($product_cart as $product)
								<div class="cart-item">
									<div class="media">
										<a class="pull-left" href="#"><img src="source/image/product/{{$product['item']['image']}}" alt=""></a>
										<div class="media-body">
											<span class="cart-item-title">{{$product['item']['name']}}</span>
											<span class="cart-item-amount">{{$product['qty']}}*<span>{{$product['item']['unit_price']}}</span></span>
										</div>
									</div>
								</div>
								@endforeach

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">{{Session('cart')->totalPrice}}</span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.html" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->
					@endif
					</div>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-body -->
<!-- thanh menu: Home ProductType About Contact -->
		<div class="header-bottom" style="background-color: #c63939;"><!-- thanh menu mau do -->
			<div class="container">
				<a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
				<div class="visible-xs clearfix"></div>
				<nav class="main-menu">
					<ul class="l-inline ov">
						<li><a href="{{route('trang-chu')}}">Home</a></li><!-- nut Home -->
						<li><a href="#">Product Type</a><!-- nut ProductType, chon loaisp ben duoi -->
							<ul class="sub-menu">
								@foreach($loai_sp as $loai)<!-- list nut loaisp de chon -->
								<li><a href="{{route('loaisanpham',$loai->id)}}">{{$loai->name}}</a></li>
								@endforeach
							</ul>
						</li>
						<li><a href="{{route('gioithieu')}}">About</a></li><!-- nut About -->
						<li><a href="{{route('lienhe')}}">Contact</a></li><!-- nut contact -->
					</ul>
					<div class="clearfix"></div>
				</nav>
			</div> <!-- .container -->
		</div> <!-- .header-bottom -->
	</div> <!-- #header -->