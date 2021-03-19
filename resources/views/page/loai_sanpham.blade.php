@extends('master')
@section('content')
	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Product Type: {{$loap_sp->name}}</h6><!--hien thi ten loaisp khi chon loaisp-->
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trang-chu')}}">Home</a> / <span>Product Type</span><!--nhan vao Home trong 'Home/ProductType'-->
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
				<!--	<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="#">Typography</a></li>
							<li><a href="#">Buttons</a></li>
							<li><a href="#">Dividers</a></li>
							<li><a href="#">Columns</a></li>
							<li><a href="#">Icon box</a></li>
							<li><a href="#">Notifications</a></li>
							<li><a href="#">Progress bars and Skill meter</a></li>
							<li><a href="#">Tabs</a></li>
							<li><a href="#">Testimonial</a></li>
							<li><a href="#">Video</a></li>
							<li><a href="#">Social icons</a></li>
							<li><a href="#">Carousel sliders</a></li>
							<li><a href="#">Custom List</a></li>
							<li><a href="#">Image frames &amp; gallery</a></li>
							<li><a href="#">Google Maps</a></li>
							<li><a href="#">Accordion and Toggles</a></li>
							<li class="is-active"><a href="#">Custom callout box</a></li>
							<li><a href="#">Page section</a></li>
							<li><a href="#">Mini callout box</a></li>
							<li><a href="#">Content box</a></li>
							<li><a href="#">Computer sliders</a></li>
							<li><a href="#">Pricing &amp; Data tables</a></li>
							<li><a href="#">Process Builders</a></li>
						</ul>
					</div>-->
<!--list sp theo loai, khi chon loaisp-->
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Products</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($sp_theoloai)}} products</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
								@foreach($sp_theoloai as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt="" height="250px"></a><!--nhan vao hinh anh, se den chi tiet sp-->
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price">
											@if($sp->promotion_price == 0)<!--neu sp ko khuyenmai-->
												<span class="flash-sale">{{$sp->unit_price}}đ</span>
											@else<!--sp co khuyenmai-->
												<span class="flash-del">{{$sp->unit_price}}đ</span>
												<span class="flash-sale">{{$sp->promotion_price}}đ</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href=""><i class="fa fa-shopping-cart"></i></a><!--nhan vao icon gio hang-->
											<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a><!--nhan vao nut Detail, se den chi tiet sp-->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
						</div> <!-- .beta-products-list -->
<!--list sp khac-other-->
						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Other</h4>
							<div class="beta-products-details">
								<p class="pull-left"></p><!--438 styles found-->
								<div class="clearfix"></div>
							</div>
							<div class="row">
								@foreach($sp_khac as $sp)
								<div class="col-sm-4">
									<div class="single-item">
										<div class="single-item-header">
											<a href="{{route('chitietsanpham',$sp->id)}}"><img src="source/image/product/{{$sp->image}}" alt="" height="250px"></a><!--nhan vao hinh anh, se den chi tiet sp-->
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$sp->name}}</p>
											<p class="single-item-price">
											@if($sp->promotion_price == 0)<!--neu sp ko khuyenmai-->
												<span class="flash-sale">{{$sp->unit_price}}đ</span>
											@else<!--sp co khuyenmai-->
												<span class="flash-del">{{$sp->unit_price}}đ</span>
												<span class="flash-sale">{{$sp->promotion_price}}đ</span>
											@endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a><!--nhan vao icon gio hang-->
											<a class="beta-btn primary" href="{{route('chitietsanpham',$sp->id)}}">Details <i class="fa fa-chevron-right"></i></a><!--nhan vao nut Detail, se den chi tiet sp-->
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								@endforeach
							</div>
							<div class="row">{{$sp_khac->links()}}</div>
							<div class="space40">&nbsp;</div>
							
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection